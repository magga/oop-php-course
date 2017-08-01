<?php

    class Car {
        private $_speed;
        private $_fuel;

        public function __construct($speed, $fuel){
            $this->_speed = $speed;
            $this->_fuel = $fuel;
        }

        public function decelerate($val){

            // Cek kondisi jangan sampai speednya menjadi negatif
            if(($this->_speed - $val) >= 0 ){
                $this->_speed -= $val;
            } else {
                $this->_speed = 0;
            }
        }

        public function accelerate($val){
            $this->speed += $val;
        }

        public function getCurrentSpeed(){
            return $this->speed;
        }
    }

    echo "Deklarasi MyCar : <br>";
    
    $myCar = new Car(100, 100);
    echo print_r($myCar) . "<br><br>";

    echo "Kecepatan Sekarang : " . (string)($myCar->getCurrentSpeed()) . "<br><br>";

    $myCar->accelerate(30);
    echo "Accelerate 30. " . "Kecepatan Sekarang : " . (string)($myCar->getCurrentSpeed()) . "<br><br>";

    $myCar->decelerate(50);
    echo "Decelerate 50. " . "Kecepatan Sekarang : " . (string)($myCar->getCurrentSpeed()) . "<br><br>";

    $myCar->decelerate(100);
    echo "Decelerate 100. " . "Kecepatan Sekarang : " . (string)($myCar->getCurrentSpeed()) . "<br><br>";

?>
