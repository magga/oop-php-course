<?php

function __autoload($className){
    include "$className.php";
}

$myRoom = new Room();
$myRoom->roomNumber = 12;

$myCourse = new Course();
$myCourse->courseName = "OOP";

$myCourse->room = $myRoom;

//echo $myCourse->room->roomNumber;
echo "courseName tipenya : " . gettype($myCourse->courseName) . "<br>";
echo "room tipenya : " . get_class($myCourse->room) . "<br>";

?>