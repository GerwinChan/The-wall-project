<!Doctype html>
<html>
    <head>
        <title>Home</title>
        <meta name="author" content="Gerwin Chan">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
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
                    <li><a href='index.html'><span>Upload</span></a></li>
                    <li><a href='share.html'><span>Share</span></a></li>
                    <li><a href='faq.html'><span>FAQ</span></a></li>
                    <li><a href='index.html'><span>Log in</span></a></li>
                    <li><a href='indexregistreer.html'><span>Registreer</span></a></li>

                </ul>

        </div>



        <?php

      
        $con=mysqli_connect("localhost","gerwin","chan123","20803");
        mysqli_select_db($con,"20803");
        $qry= "select image, title, des, tag from pics";
        $result=mysqli_query($con,$qry);
        echo '<div id="justifiedGallery">';
        while($row = mysqli_fetch_array($result))
        {
            echo '<a href="' . $row ['image']  .  ' " data-lightbox="foto" data-title="Naam: ' .  $row['title'] . "<br> Beschrijving: " .$row['des'] . "<br> Tags: " . $row ['tag'] . '"><img src="' . $row['image'] . '"></a>';

        }
        echo '</div>';
        mysqli_close($con);
?>



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
  <script src="lightbox2-master/dist/js/lightbox.js"></script>
            </body>
           </html>
