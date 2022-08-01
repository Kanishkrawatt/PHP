<?php

if(isset($_POST["submit"])){
    echo "Form validation<br>";
    $patternUsername = "/^[a-z][a-z\d]+\.[a-z]+/i";
    $patternPassword = "/^[a-z\d][a-z\d]+@[\d]+/i";
    if(preg_match($patternUsername,$_POST["user"]) and preg_match($patternPassword,$_POST["pass"])){
        echo "Username : ";
        echo $_POST["user"];

        echo "<br>Password : ";
        echo $_POST["pass"];
    }
    else{
        if(preg_match($patternUsername,$_POST["user"])){
            echo "Password in not in correct format";
        }
        else{
            echo "Username is not in correct format";
        }
    }
}


?>