<?php

abstract class User{
    protected $scores = 0;
    protected $numberOfArticles = 0;

    public function setNumberOfArticles($int){
        $this->numberOfArticles = $int;
    }

    public function getNumberOfArticles(){
        return $this->numberOfArticles;
    }

    abstract public function calcScores();
}

?>