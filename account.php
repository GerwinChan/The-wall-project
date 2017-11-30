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
<title>Welkom</title>
     <link href="style5.css" rel="stylesheet" type="text/css">

    </head>


    <div id='cssmenu'>

            <ul class="knoppen">
                <h1>The Wall Project</h1>
             <li class='active'><a id="ewa" href='indexINGELOGD.php'><span>Home</span></a></li>
  <li><a href='fileuploadINGELOGD.php'><span>Upload</span></a></li>
                <li><a href='faq.html'><span>FAQ</span></a></li>

                <li><a href='index.php'><span>Log uit</span></a></li>


            </ul>

    </div>
 <body>
<div class="LeftBody"></div>
<div class="RightBody">
  <?php
  if(isset($_SESSION['ID'])){
    echo "Welkom op mijn website"; $_SESSION['ID'];
    echo "<br>";
    echo $_SESSION['ID'];
  }
  else {

echo "User doesn't exist! You will be redirected to the register page. Please wait a second..";
header("refresh:3; url=indexregistreer.html");

  }
  ?>
</div>


 </body>
    </html>
