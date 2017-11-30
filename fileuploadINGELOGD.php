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

session_start();

?>


<!DOCTYPE html>
<htmL>
  <head>
<title>Upload your file</title>
     <link href="style5.css" rel="stylesheet" type="text/css">

    </head>


    <div id='cssmenu'>

            <ul class="knoppen">
                <h1>The Wall Project</h1>
             <li class='active'><a id="ewa" href='indexINGELOGD.php'><span>Home</span></a></li>
                <li><a href='share.html'><span>Share</span></a></li>
                <li><a href='faq.html'><span>FAQ</span></a></li>
                <li><a href='index.html'><span>Log uit</span></a></li>



            </ul>

    </div>
<div class="login-page">
<div class="form">


<form method="post" enctype="multipart/form-data" action="uploadfile.php">



    <input type="file" name="image" required="required">

      <input type="text" placeholder="Naam" name="title" required="required">

        <input type="text" placeholder="Beschrijving" name="des" required="required">

     <input type="text" placeholder="Tags" name="tag" required="required">

<input type="submit" name="sumit" value="Upload">
</form>
