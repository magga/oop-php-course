<?php

function __autoload($className){
    include "classes/$className.php";
}

$user1 = new AuthorEditor();

$user1->setUsername("Balthazar");

$user1->setAuthorPrivilages(array("Write Text", "Add Punctuation"));

$user1->setEditorPrivilages(array("Edit Text", "Edit Punctuation"));

echo $user1->getUsername() . " has the following privileges : " . "<br>";

foreach($user1->getAuthorPrivilages() as $child){
    echo $child . ", ";
}

foreach($user1->getEditorPrivilages() as $child){
    echo $child . ", ";
}
    

?>