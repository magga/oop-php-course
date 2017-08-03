<?php

function __autoload($className){
    include "$className.php";
}

$product1 = new Product();

echo "Sebelum : " . Product::$smartphoneTerjual;

$product1->terjual();

echo "<br>Sesudah : " . Product::$smartphoneTerjual;

?>