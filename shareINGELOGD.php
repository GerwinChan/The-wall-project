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

<html>
<head>
  <link rel="stylesheet" href="style5.css">

</head>
<body>
  <div id='cssmenu'>


              <h1>The Wall Project</h1>
                <ul class="knoppen">
           <li class='active'><a id="ewa" href='indexINGELOGD.php'><span>Home</span></a></li>
              <li><a href='fileupload.php'><span>Upload</span></a></li>

              <li><a href='index.html'><span>Log In</span></a></li>
              <li><a href='index.html'><span>Log out</span></a></li>

              <div class="Right">
              <?php echo $_SESSION['ID'];?>
              </div>
          </ul>

  </div>

<h2>Share this website with your friends!</h2>

  <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
  <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
  <a class="a2a_button_facebook"></a>
  <a class="a2a_button_twitter"></a>
  <a class="a2a_button_google_plus"></a>
  </div>
  <script async src="https://static.addtoany.com/menu/page.js"></script>

  <section class="subscribe">
     <div class="subscribe-pitch">
       <h3>Subscribe</h3>
       <p>Subscribe to our newsletter to get the latest updates right to your inbox.<p>
     </div>
     <form action="index.html" method="post" class="subscribe-form">
       <input type="email" name="email" class="subscribe-input" placeholder="Email address" autofocus>
       <button type="submit" class="subscribe-submit">Subscribe</button>
     </form>
   </section>




</body>
</html>
