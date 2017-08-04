<?php

class CourseOnsite extends Course{
    private $_companyName;
    private $_totalCandidates;

    const SERVICECHARGE = 10;

    public function print(){
        return parent::print() . "<br>" .
            "Company Name : " . $this->_companyName . "<br>" .
            "Number of Candidates : " . $this->_totalCandidates . "<br>" .
            "Service Charge : " . self::SERVICECHARGE . "%";
    }

    public function getTotalFee(){
        return $this->_fee + ($this->_fee * self::SERVICECHARGE / 100);
    }

    public function __construct($val1, $val2, $val3, $val4, $val5){
        parent::__construct($val1, $val2, $val3);

        $this->_companyName = $val4;
        $this->_totalCandidates = $val5;
    }
}

?>