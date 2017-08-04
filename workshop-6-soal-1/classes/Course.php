<?php

class Course{
    private $_courseName;
    private $_courseFee;

    public function getCourseName(){
        return $this->_courseName;
    }

    public function getCourseFee(){
        return $this->_courseFee;
    }

    public function __construct($val1, $val2){
        $this->_courseName = $val1;
        $this->_courseFee = $val2;
    }
}

?>