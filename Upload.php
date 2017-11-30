<?php

//MAAK DB CONNECTION AAN (STAP 1)


//Dump de array 
var_dump($_FILES);

$image_path = 'images/';

//Naam uitlezen van de upload
$filename = $_FILES['fileToUpload']['name'];
//echo $filename;

$tmp_filename = $_FILES['fileToUpload']['tmp_name'];

$destination = $image_path . $filename;

if (move_uploaded_file($tmp_filename , $destination)) {
    
    echo 'File is uploaded';

}

else {
    echo 'Error uploading file';
    
}

//DATABASE THE WALL; TOEVOEGEN 1 ITEN AAN TABEL PICS (STAP 3)
//Stap 3A. Maak een INSERT query aan 
//Voer de query uit

//Stap 4 Lees de gegevens uit de DB uit
//stap 4A Maak een SELECT query;
?>