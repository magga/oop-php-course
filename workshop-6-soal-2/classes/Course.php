<?php

class Course{
    protected $_name;
    protected $_duration;
    protected $_fee;

    protected function print(){
        return "Course Name : " . $this->_name . "<br>" .
            "Course Duration : " . $this->_duration . "<br>" .
            "Course Fee : " . $this->_fee . "<br>";
    }

    protected function __construct($val1, $val2, $val3){
        $this->_name = $val1;
        $this->_duration = $val2;
        $this->_fee = $val3;
    }
}

?>