<?php

class Triangle 
    extends Shape
    implements Sellable  {
    
    public function sell(){
        return "Sell Triangle";
    }

    public function buy(){
        return "Buy Triangle";
    }

    public function getArea(){
        return ($this->width * $this->height / 2);
    }
}

?>