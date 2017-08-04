<?php

function __autoload($className){
    include "classes/$className.php";
}

$myAdmin = new Admin();
$myAdmin->setUsername("Balthazar");

echo $myAdmin->stateYourRoll();

?>