<?php

class Admin extends User {
    public function expressYourRole(){
        return "Admin";
    }

    public function sayHello(){
        return "Hello admin, " . $this->getUsername();
    }
}

?>