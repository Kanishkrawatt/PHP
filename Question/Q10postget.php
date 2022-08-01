<?php 


if(isset($_POST["submit"])){
echo"<h1> using post </h1>";
echo "Username : ";
echo $_POST["user"];

echo "<br>Password : ";
echo $_POST["pass"];
}

elseif(isset($_GET["submit"])){
echo"<h1> using get </h1>";
echo "Username : ";
echo $_GET["user"];

echo "<br>Password : ";
echo $_GET["pass"];
}




?>