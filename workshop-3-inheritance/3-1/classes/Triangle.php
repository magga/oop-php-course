<?php

class Triangle extends Shape {
    public function area(){
        return ($this->_width * $this->_height) / 2;
    }
}

?>