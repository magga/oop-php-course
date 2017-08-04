<?php

abstract class User{
    protected $username;

    public function setUsername($val){
        $this->username = $val;
    }

    public function getUsername(){
        return $this->username;
    }

    abstract public function stateYourRoll();
}

?>