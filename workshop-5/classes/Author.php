<?php

class Author extends User {
    public function calcScores(){
        return $this->getNumberOfArticles() * 10 + 20;
    }
}

?>