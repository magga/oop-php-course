<?php

function __autoload($className){
    include "classes/$className.php";
}

$myAdmin = new Admin();
$myAdmin->setUsername("Gogo");

echo "Express Your Role : " . $myAdmin->expressYourRole() . "<br>";

echo "Say Hello : " . $myAdmin->sayHello();

?>