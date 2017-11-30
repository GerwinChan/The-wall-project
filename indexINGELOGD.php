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



<!Doctype html>
<html>
    <head>
        <title>Home</title>
        <meta name="author" content="Gerwin Chan">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style5.css">
          <link href="lightbox.css" rel="stylesheet">
        <link rel="stylesheet" href="css/justifiedGallery.min.css" />
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="js/jquery.justifiedGallery.min.js"></script>

     </head>
    <body>

       <nav>


        <div id='cssmenu'>


                    <h1>The Wall Project</h1>
                      <ul class="knoppen">
                 <li class='active'><a id="ewa" href='#home'><span>Home</span></a></li>
                    <li><a href='fileuploadINGELOGD.php'><span>Upload</span></a></li>
                    <li><a href='faq.html'><span>FAQ</span></a></li>

                      <li><a href='index.php'><span>Log uit</span></a></li>

                </ul>


        </div>



        <?php

        $con=mysqli_connect("localhost","gerwin","chan123", "20803");
        mysqli_select_db($con,"20803");

        //$con=mysqli_connect("localhost","root","", "testdatabase");
        //mysqli_select_db($con,"testdatabase");
        $qry="select image, title, des, tag from pics";
        $result=mysqli_query($con,$qry);
        echo '<div id="justifiedGallery">';
        while($row = mysqli_fetch_array($result))
        {
            echo '<a href="' . $row['image'] . '"  data-lightbox="foto" data-title="Naam: ' . $row['title']  ."<br> Beschrijving: " . $row['des'] . "<br> Tags: " .  $row['tag'] . '"><img src="' . $row['image'] . '"></a>';
        }
        echo '</div>';
        mysqli_close($con);
?>

<style>

#justifiedGallery img:hover {

opacity: 0.5;
transition: .3s;

}


</style>

<script>
$("#justifiedGallery").justifiedGallery({
rowHeight : 200,
lastRow : 'nojustify',
margins : 5
});
</script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
  <script src="lightbox.js"></script>
            </body>
           </html>
