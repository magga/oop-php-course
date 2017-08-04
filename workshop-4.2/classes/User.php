<?php

class User{
    protected $username;

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($val){
        $this->username = $val;
    }
}

?>