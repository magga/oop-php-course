<?php

function __autoload($className){
    include "classes/$className.php";
}

$author1 = new Author();
$author1->setNumberOfArticles(8);

echo "Author1 : " . "<br>" . 
    "&nbsp &nbsp Number of Articles : 8" . "<br>" .
    "&nbsp &nbsp Scores : " . $author1->calcScores();

echo "<br><br>";

$editor1 = new Editor();
$editor1->setNumberOfArticles(15);

echo "Editor1 : " . "<br>" . 
    "&nbsp &nbsp Number of Articles : 15" . "<br>" .
    "&nbsp &nbsp Scores : " . $editor1->calcScores();

?>