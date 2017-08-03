<?php

function __autoload($className){
    include "classes/$className.php";
}

$product1 = new Product("Xiaomi Redmi 4X", 1500000);

$seller1 = new Seller("Toko Original Xiaomi", "www.xiaomi.com");
$seller1->setProduct($product1);

echo $seller1;

echo "<br><br>";

?>