<?php

function __autoload($className){
    include "classes/$className.php";
}

////////////////////////////////////////////////////////////////
// Rectangle

$width = 10;
$height = 15;

$myRect = new Rectangle($width, $height);

echo "Rectangle dengan Panjang : " . $width . " dan Lebar : " . $height;
echo "<br>";
echo "Function buy() : " . $myRect->buy();
echo "<br>";
echo "Function sell() : " . $myRect->sell();
echo "<br>";
echo "Function getArea() : " . $myRect->getArea();
echo "<br><br>";

////////////////////////////////////////////////////////////////
// Triangle

$width = 40;
$height = 25;

$myTria = new Triangle($width, $height);

echo "Triangle dengan Panjang : " . $width . " dan Lebar : " . $height;
echo "<br>";
echo "Function buy() : " . $myTria->buy();
echo "<br>";
echo "Function sell() : " . $myTria->sell();
echo "<br>";
echo "Function getArea() : " . $myTria->getArea();
echo "<br><br>";

////////////////////////////////////////////////////////////////
// Cube

$width = 10;
$height = 10;
$length = 10;

$myCube = new Cube($width, $height, $length);

echo "Cube dengan Sisi : " . $width;
echo "<br>";
echo "Function buy() : " . $myCube->buy();
echo "<br>";
echo "Function sell() : " . $myCube->sell();
echo "<br>";
echo "Function getArea() : " . $myCube->getArea();
echo "<br>";
echo "Function getVolume() : " . $myCube->getVolume();
echo "<br><br>";

?>