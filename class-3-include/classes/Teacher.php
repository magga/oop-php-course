<?php

class Teacher {
    private $_name;
    private $_address;
    private $_subject;

    public function __construct($name, $address, $subject){
        $this->_name = $name;
        $this->_address = $address;
        $this->_subject = $subject;
    }

    public function __toString(){
        return "Hello nama saya " . $this->_name . " <br> " .
            "Alamat saya di " . $this->_address . " <br> " .
            "Saya mengajar " . $this->_subject;
    }
}

?>



