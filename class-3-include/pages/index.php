<?php

// include "../classes/Student.php";
// include "../classes/Teacher.php";
// include "../classes/Staff.php";

function __autoload($className){
    include "../classes/$className.php";
}

$myStudent = new Student("Osas", "Nikaragua", 100);
$myTeacher = new Teacher("Gogo", "Bekasi", "Object Oriented Programming");
$myStaff = new Staff("David Buchanan", "UK", "Bagian Administrasi");

echo $myStudent;
echo "<br><br>";
echo $myTeacher;
echo "<br><br>";
echo $myStaff;

?>