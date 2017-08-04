<?php

function __autoload($className){
    include "classes/$className.php";
}

$myCoursePartTime = new CoursePartTime("OOP", "6 Months", 7500000, "10:00 - 13:00");

echo "Course Part Time : <br><br>";

echo $myCoursePartTime->print();

echo "<br><br>";

echo "Total Fee : " . $myCoursePartTime->getTotalFee();

echo "<br><br>//////////////////////////////////////////////////////////////////////////////<br><br>";

$myCourseOnsite = new CourseOnsite("Programming Fundamental", "4.5 Months", 5000000, "Purwadhika", 30);

echo "Course Onsite : <br><br>";

echo $myCourseOnsite->print();

echo "<br><br>";

echo "Total Fee : " . $myCourseOnsite->getTotalFee();

?>