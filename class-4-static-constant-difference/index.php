<?php

class Product {
    // Normal Property
    public $nama = "Produk Saya";

    // Constant Property
    const PPN = 50;

    // Static Property
    static $totalTerjual = 0;

    // Function Normal
    public function getNama(){
        return $this->nama;
    }

    // Function Static
    public static function getTotalTerjual(){
        return self::$totalTerjual;
    }

    // Function Normal yang Nge-return Static
    public function getTotalTerjualBukanStatic(){
        return self::$totalTerjual;
    }
}

$myProd = new Product();

// Cara Panggil Normal Property
echo "Normal : " . $myProd->nama . "<br>";

// Cara Panggil Constant Property
echo "Constant : " . Product::PPN . "<br>";

// Cara Panggil Static Property
echo "Static : " . Product::$totalTerjual . "<br><br>";


// Cara Panggil Function Normal
echo "Function Normal : " . $myProd->getNama() . "<br>";

// Cara Panggil Function Static
echo "Function Static : " . Product::getTotalTerjual() . "<br>";

// Cara Panggil Function Normal yang Nge-return Static
echo "Function Normal Tapi Nge-return Static : " . Product::getTotalTerjualBukanStatic() . "<br>";

?>