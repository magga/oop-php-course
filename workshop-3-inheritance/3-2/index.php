<?php

function __autoload($className){
    include "classes/$className.php";
}

echo "Laptop merek LENOVO dengan detail object : <br>";

$myLenovo = new Lenovo("Lenovo Thinkpad T460", 12000000, "Intel i7 3.7GHz", "8 Gb", "256Gb SSD");

print_r($myLenovo);

echo "<br><br>";

$myLenovo->printDetail();

echo "<br><br>";

////////////////////////////////////////////////////////////////////////////////////////////////

echo "Laptop merek HP dengan detail object : <br>";

$myHP = new HP("HP G5000", 6500000, "Intel i3 1.8GHz", "8 Gb", "512Gb");

print_r($myHP);

echo "<br><br>";

$myHP->printDetail();

echo "<br><br>";

////////////////////////////////////////////////////////////////////////////////////////////////

echo "Laptop merek ACER dengan detail object : <br>";

$myAcer = new Acer("Acer Aspire VX 15", 8250000, "AMD XXX", "4 Gb", "750Gb SATA");

print_r($myAcer);

echo "<br><br>";

$myAcer->printDetail();

echo "<br><br>";

?>