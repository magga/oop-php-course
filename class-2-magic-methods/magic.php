<?php

class Car {
    private $color;
    private $maker;
    private $year;

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getMaker(){
        return $this->maker;
    }

    public function setMaker($maker){
        $this->maker = $maker;
    }

    public function getYear(){
        return $this->year;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function print(){
        print_r($this);
    }

    // Magic Function
    // public function __construct($color, $maker, $year){
    //     $this->color = $color;
    //     $this->maker = $maker;
    //     $this->year = $year;
    // }

    public function __destruct(){
        // Biasanya digunakan untuk
        // melepas resource seperti melepas koneksi
        // ke database, website, atau API
        // echo "Destruct terpanggil";
    }

    public function __get($property){
        echo $property . " terpanggil";
    }

    public function __set($name, $value){
        echo $name . " dengan value " . $value . 
            " tidak tersedia";
    }

    public function __call($name, $args){
        echo "Function " . $name . " tidak tersedia";
    }
}

$myCar = new Car();
// $myCar->setColor("Red");
// $myCar->setMaker("Toyota");
// $myCar->setYear(2017);

// echo "My Car's color is " . $myCar->getColor() . "<br>";
// echo "My Car's maker is " . $myCar->getMaker() . "<br>";
// echo "My Car's year is " . $myCar->getYear() . "<br>";

// $myCar->color;

// // GET
// $test = $myCar->NamaPakRT;

// // SET
// $myCar->NamaPakRT = "Pak Joko";

$myCar->TolongPanggilinPakRTDong();

?>