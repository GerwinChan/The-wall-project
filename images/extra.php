<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Color Table</title>
</head>

<body>
<h1>Color Table</h1>
<?php
//Create an array that holds your favorite colors.
$colors = array(
    'aqua' => '#00FFFF',
    'yellow' => '#FFFF00',
    'black' => '#000000',
    'white' => '#FFFFFF',
    'orange' => '#FFa500'
)

?>
<table border="1">
    <tbody>
    <?php
    echo "<td>Color :</td>";
    echo "<td>Hex Code :</td>";
    foreach($colors as $name => $color){

        echo "<tr style=background-color:" /*. '"' */ . $color  /* . '"'*/ . '>';
            echo "<td> $name</td>";
            echo "<td> $color</td>";

        
    }
    ?>
 
    </tbody>
</table>
   <?php
function printSource(){
                  echo "<h1>source code</h1>";
                  $all_lines = file( pathinfo(__FILE__, PATHINFO_BASENAME));
                  foreach ($all_lines as $line_num => $line)
                  { echo "" . htmlspecialchars($line) . "<br>\n";}}
printSource(); ?>
</body>
</html>