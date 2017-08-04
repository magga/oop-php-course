<?php

class CoursePartTime extends Course{
    private $_timing;

    const DISCOUNT = 10;

    public function print(){
        return parent::print() . "<br>" .
            "Timing : " . $this->_timing . "<br>" .
            "Discount : " . self::DISCOUNT . "%";
    }

    public function getTotalFee(){
        return $this->_fee - ($this->_fee * self::DISCOUNT / 100);
    }

    public function __construct($val1, $val2, $val3, $val4){
        parent::__construct($val1, $val2, $val3);

        $this->_timing = $val4;
    }
}

?>