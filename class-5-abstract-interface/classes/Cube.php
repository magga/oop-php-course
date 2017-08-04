<?php

class Cube 
    extends Shape
    implements Sellable  {

    private $_length;

    public function __construct($val1, $val2, $val3){
        parent::__construct($val1, $val2);

        $this->_length = $val3;
    }

    public function sell(){
        return "Sell Cube";
    }

    public function buy(){
        return "Buy Cube";
    }

    public function getArea(){
        return ($this->width * $this->height * 6);
    }

    public function getVolume(){
        return ($this->width * $this->height * $this->_length);
    }
}

?>