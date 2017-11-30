<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'gerwin';
const DB_PASSWORD = 'chan123';
const DB_NAME = '20803';

//const DB_HOST = 'localhost';
//const DB_USERNAME = 'root';
//const DB_PASSWORD = '';
//const DB_NAME = 'testdatabase';

$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if (!$con)
{

echo 'Not Connected To Server!';

}

//if(!mysqli_select_db($con,'testdatabase'))
if(!mysqli_select_db($con,'20803'))
{

echo 'Database Not Selected';

}

$Name = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['wachtwoord'];

$sql = "INSERT INTO person (Name,Email,Password) VALUES ('$Name','$Email','$Password')"       ;

if(!mysqli_query($con,$sql))
{

echo 'Not inserted';

}
else
{
  echo '<h1>'.'Thanks for joining us!'.'<h1>';








}
header("refresh:2; url=index.html");



 ?>
