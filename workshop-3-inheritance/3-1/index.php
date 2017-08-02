<?php

function __autoload($className){
    include "classes/$className.php";
}

$myRectangle = new Rectangle(30, 30);

echo "Rectangle dengan detail object : <br>";

print_r($myRectangle);

echo "<br><br>";

echo "Luasnya adalah : " . $myRectangle->area();

echo "<br><br>";

///////////////////////////////////////////////////////////////////////

$myTriangle = new Triangle(10, 20);

echo "Triangle dengan detail object : <br>";

print_r($myTriangle);

echo "<br><br>";

echo "Luasnya adalah : " . $myTriangle->area();

echo "<br><br>";

?>