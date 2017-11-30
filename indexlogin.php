<?php

$con=mysqli_connect("localhost","gerwin","chan123","20803");
mysqli_select_db($con,"20803");


//$con=mysqli_connect("localhost","root","","testdatabase");
//mysqli_select_db($con,"testdatabase");


  if(isset($_POST['LogIn'])) {

   $EM = $_POST['user'];
   $PW = $_POST['password'];


   $result = $con->query("SELECT * FROM person where Name='$EM' AND Password='$PW'");

   $row = $result->fetch_array(MYSQLI_BOTH);

   session_start();

   $_SESSION["ID"] = $row["Name"];

   header('Location: account.php');

 }

?>
