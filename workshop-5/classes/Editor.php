<?php

class Editor extends User {
    public function calcScores(){
        return $this->getNumberOfArticles() * 6 + 15;
    }
}

?>