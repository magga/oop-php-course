<?php

class Laptop {
    protected $_name;
    protected $_price;
    protected $_processor;
    protected $_ram;
    protected $_hardDrive;

    public function __construct($name, $price, $processor, $ram, $hardDrive){
        $this->_name = $name;
        $this->_price = $price;
        $this->_processor = $processor;
        $this->_ram = $ram;
        $this->_hardDrive = $hardDrive;
    }

    public function printDetail(){
        echo "Name          : " . $this->_name . "<br>" .
            "Price         : " . $this->_price . "<br>" .
            "Processor     : " . $this->_processor . "<br>" .
            "RAM           : " . $this->_ram . "<br>" .
            "Hard Drive    : " . $this->_hardDrive . "<br>";
    }
}

?>