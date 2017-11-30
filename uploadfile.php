<?php
if(isset($_POST['sumit']))
{
      $image= ($_FILES['image']['tmp_name']);
      $name= ($_FILES['image']['name']);
      $title= $_POST['title'];
        $des= $_POST['des'];
          $tag= $_POST['tag'];
      $image_path = "images/";
      $destination = $image_path . $name;

}
    else
    {
          echo "Please select an image.";
    }



move_uploaded_file($image ,$destination);

    $mysqli=mysqli_connect("localhost","gerwin","chan123","20803");
    //$mysqli=mysqli_connect("localhost","root",""," testdatabase");
    $sql = "INSERT INTO pics ( name , image, title , des, tag) VALUES ('$name' , '$destination' , '$title', '$des', '$tag')";
    $result= $mysqli->query($sql);

    if($result === TRUE AND $name != "")
    {
        echo "<br/>Congrats! Image uploaded. Please wait a second..";
        header("refresh:2; url=indexINGELOGD.php");

    }
    else
    {
        echo "<br/>Image not uploaded.";
        echo $mysqli->error;
    }


?>
