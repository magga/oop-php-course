<?php

class Student {
    private $_name;
    private $_address;
    private $_nilai;

    public function __construct($name, $address, $nilai){
        $this->_name = $name;
        $this->_address = $address;
        $this->_nilai = $nilai;
    }

    public function __toString(){
        return "Hello nama saya " . $this->_name . " <br> " .
            "Alamat saya di " . $this->_address . " <br> " .
            "Nilai saya " . $this->_nilai;
    }
}

?>



