<?php

const DB_HOST = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'testdatabase';

$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if (!$con)
{

echo 'Not Connected To Server!';

}

if(!mysqli_select_db($con,'testdatabase'))
{

echo 'Database Not Selected';

}

$Name = $_POST['username'];
$Email = $_POST['email'];

$sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";

if(!mysqli_query($con,$sql))
{

echo 'Not inserted';

}
else
{
  echo 'Thanks for joining us!';
}
header("refresh:2; url=index");

 ?>
