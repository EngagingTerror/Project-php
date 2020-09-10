<?php
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    echo "Your Username is ".$name."<br>".PHP_EOL;
    echo "Your Password is ".$pass."<br>".PHP_EOL;
    echo "Your have succelfully log in.";

}

    echo "<p>E-mail has been succelfully send to ". $_GET["getEmail"]. " for a password reset.</p>";

 ?>
