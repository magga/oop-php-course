<?php

class Rectangle 
    extends Shape
    implements Sellable  {

    public function sell(){
        return "Sell Rectangle";
    }

    public function buy(){
        return "Buy Rectangle";
    }

    public function getArea(){
        return ($this->width * $this->height);
    }
}

?>