<?php

if (isset($_POST['signUp-submit'])) {
    require 'dbh-inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd-repeat'];

    // ERROR HANDELING

    // filled in all the fields
    if (empty($username) || empty($email) || empty($pwd) || empty($pwd2)) {
        header("Location: ../signUp.php?error=emptyfields&uid=" . $uid . "&mail=" . $email);
        exit();
    }

    // incorrect user & password check
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signUp.php?error=invalid_uid_mail");
        exit();
    }

    // invalid email check 
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signUp.php?error=invalid_mail&uid=" . $uid);
        exit();

        // invalid uid    
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signUp.php?error=invalid_uid&mail=" . $mail);
        exit();
    }

    // passwords do not match check
    elseif ($pwd !== $pwd2) {
        header("Location: ../signUp.php?error=invalid_pwd&uid=" . $username . "&mail=" . $mail);
        exit();
    }

    // duplicate user name check
    else {
        $sql = "SELECT uid from users WHERE uid = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signUp.php?error=sqlierror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check = mysqli_stmt_num_rows($stmt);
            if ($result_check > 0) {
                header("Location: ../signUp.php?error=usertaken&mail=" . $mail);
                exit();
            } else {
                $sql = "INSERT INTO users (uid, email, pwd) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signUp.php?error=sqlierror");
                    exit();
                } else {
                    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signUp.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signUp.php?error=useSignUpform");
    exit();
}
