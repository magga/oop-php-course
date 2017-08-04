<?php

function __autoload($className){
    include "classes/$className.php";
}

$myStudent = new Student("ABC123", "Gogo");
$myCourse = new Course("Object Oriented Programming", 7500000);

$myStudent->setCourse($myCourse);

echo $myStudent->print();

echo "<br><br>";

$payment = 5000000;

echo "Payment : " . $payment;

$myStudent->payment($payment);

echo "<br><br>";

echo "Due Amount : " . $myStudent->dueAmount();

?>