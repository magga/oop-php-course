<?php

class Student {
    private $_rollNo;
    private $_studentName;
    private $_course;
    private $_feePaid = 0;

    public function __construct($val1, $val2){
        $this->_rollNo = $val1;
        $this->_studentName = $val2;
    }

    public function setCourse($val){
        $this->_course = $val;
    }

    public function payment($val){
        $this->_feePaid += $val;
    }

    public function print(){
        return "Student Name : " . $this->_studentName . "<br>" .
            "Student Roll Number : " . $this->_rollNo . "<br>" .
            "Course Enrolled : " . $this->_course->getCourseName() . "<br>" .
            "Course Fee : " . $this->_course->getCourseFee();
    }

    public function dueAmount(){
        return $this->_course->getCourseFee() - $this->_feePaid;
    }
}

?>