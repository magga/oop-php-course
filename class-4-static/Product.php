<?php

class Product {
    public static $smartphoneTerjual = 0;

    public function terjual(){
        Product::$smartphoneTerjual++;
    }
}

?>