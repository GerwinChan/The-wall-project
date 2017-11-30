<!Doctype html>
<html>
    <head>
        <title>The Wall</title>
        <meta name="author" content="Gerwin Chan">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
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
                    <li><a href='fileupload.php'><span>Upload</span></a></li>
                    <li><a href='share.html'><span>Share</span></a></li>
                    <li><a href='#Mijn wall'><span>Mijn wall</span></a></li>
                    <li><a href='index.html'><span>Log in</span></a></li>
                    <li><a href='indexregistreer.html'><span>Registreer</span></a></li>
                    <div class="Right">
                    <?php echo $_SESSION['ID'];?>
                    </div>
                </ul>


        </div>



        <?php

        $con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"testdatabase");
        $qry="select * from pics";
        $result=mysqli_query($con,$qry);
        echo '<div id="justifiedGallery">';
        while($row = mysqli_fetch_array($result))
        {
            echo '<a href="' . $row['image'] . '"><img src="' . $row['image'] . '"></a>';
        }
        echo '</div>';
        mysqli_close($con);
?>

<script>
$("#justifiedGallery").justifiedGallery({
rowHeight : 180,
lastRow : 'nojustify',
margins : 10
});
</script>
            </body>
           </html>
