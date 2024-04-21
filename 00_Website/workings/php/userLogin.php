<?php
if (isset($_GET['user'])) {
    $test = $_GET['userid'];
} else {
    $test = '';
}


?>
<form action="welcome.php" method="POST">
    <label class="mulish-yfke">Name</label>
    <input class="mulish-yfke" type="text" name="name"><br>
    <label class="mulish-yfke">E-Mail:</label>
    <input class="mulish-yfke" type="text" name="email"><br>
    <input class="mulish-yfke" type="submit">
</form>