<?php
if($_POST["pass"] === $_POST["Pass2"]){
    if(isset($_POST["submit"])) {
        $fName = $_POST["fName"];
        $mName = $_POST["pName"];
        $lName = $_POST["lName"];
        $email = $_POST["email"];
        $uName = $_POST["userName"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["Pass2"];

        echo "<h2>Thank you for signing up</h2>"."<br>";
        echo "<h4>Account data</h4>";
        echo "Name: ".$fName."<br>";

        if(empty($_POST["mName"])){
            echo "prefix name: Optional*"."<br>";
        }else{
            echo "prefix name: ".$pName."<br>";
        }

    }
        echo "Last name: ".$lName."<br>";
        echo "E-mail: ".$email."<br>";
        echo "Username: ".$email."<br>";
        echo "Password: ".$pass."<br>";
}else{
    echo "password does not match."." Please confirm password again.";
}
