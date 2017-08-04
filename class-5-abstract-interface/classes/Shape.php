<?php

abstract class Shape {
    protected $width;
    protected $height;

    // Hanya Override function yang
    // di-declare ABSTRACT
    abstract public function getArea();

    public function getVolume(){}

    public function __construct($val1, $val2){
        $this->width = $val1;
        $this->height = $val2;
    }
}

?>