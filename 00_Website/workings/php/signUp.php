<?php
// require "./head.php";
// require "./index_header.php"
?>

<!-- todo formatting -->
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Sign Up </h1>
            <form action="includes/signUp-inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="Email">.
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signup-submit">Sign Up</button>

            </form>
        </section>
    </div>

</main>

</html>