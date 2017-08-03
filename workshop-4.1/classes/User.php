<?php

class User{
    private $_username;

    public function setUsername($val){
        $this->_username = $val;
    }

    public function getUsername(){
        return $this->_username;
    }
}

?>