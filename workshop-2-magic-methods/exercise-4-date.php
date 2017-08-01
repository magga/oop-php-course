<?php

class MyDate {
    private $_month;
    private $_day;
    private $_year;

    public function __construct($month, $day, $year){
        $this->_month = $month;
        $this->_day = $day;
        $this->_year = $year;
    }

    public function displayDate(){
        return sprintf("%'.02d", $this->_month) . "/" . 
            sprintf("%'.02d", $this->_day) . "/" . $this->_year;
    }
}

echo "Date Pertama dengan detail object : <br>";

$firstDate = new MyDate(1, 3, 2008);

print_r($firstDate);

echo "<br><br>";

echo "Display Date : " . $firstDate->displayDate() . "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////

echo "Date Pertama dengan detail object : <br>";

$firstDate = new MyDate(12, 6, 1998);

print_r($firstDate);

echo "<br><br>";

echo "Display Date : " . $firstDate->displayDate() . "<br><br>";


?>