<!DOCTYPE html>
<html>
    <head>
    <title>Create pagina</title>
        <link href="style1.css" rel="stylesheet" type="text/css">
     <link rel="icon" href="FRICS.png" type="image/x-icon">
    </head>
<body>


        <a href="index.php"><input type="image" src="logout-512.png" id="button3" value="Log in"</a>
    <legend><li class='active'><a id="ewa" href='index.php'><span>The Wall Project</span></a></li></legend>
    <hr>
        <section class="loginform cf">
<form action="" method="POST">
    <h1 style="color:white"> Please enter your information to create a new login account</h1>
 <p>
     <label>Login Name:</label><input type="email" name="name" placeholder="Yourname@email.com" required />
     <label>Password:</label><input type="password" name="pwd" placeholder="Password" required/>
    <br/>
    <br/>
</p>

    <p style="color:white">SAVE YOUR INFORMATION FIRST AND THEN LOG IN!</p>
   <input type="submit" name="submit_btn" id="submit" value="Save"</a>
     <input type="reset" id="reset" value="reset"/>
        <a href="indexlogin.php"><input type="button" id="button2" value="Log in"</a>
</form>
    </section>

</body>
</html>

    <?php
    const DB_HOST = 'localhost';
    const DB_USERNAME = 'gerwin';
    const DB_PASSWORD = 'chan123';
    const DB_NAME = '20803';

    //const DB_HOST = 'localhost';
    //const DB_USERNAME = 'root';
    //const DB_PASSWORD = '';
    //const DB_NAME = 'testdatabase';

$mysqli = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


if($mysqli->connect_error) {
 echo 'Error: ' . $mysqli->connect_error;


}

else {

    echo 'Connection OK!';
}

$sql = "SELECT * FROM user";

$result = $mysqli->query($sql);

while($row = $result->fetch_assoc() ){

 echo '<h1>' . $row['description'] . '<h1>';
 echo '<p>' . $row['amount'] . '<p>';
    $product_image = $row['image_url'];
    echo $product_image;
    echo '<img src="' .$product_image. '">';


}
