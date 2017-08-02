<?php

class Staff {
    private $_name;
    private $_address;
    private $_jabatan;

    public function __construct($name, $address, $jabatan){
        $this->_name = $name;
        $this->_address = $address;
        $this->_jabatan = $jabatan;
    }

    public function __toString(){
        return "Hello nama saya " . $this->_name . " <br> " .
            "Alamat saya di " . $this->_address . " <br> " .
            "Saya menjabat sebagai " . $this->_jabatan;
    }
}

?>



