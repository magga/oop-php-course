<?php

class Product{
    private $_nama;
    private $_harga;

    public function __construct($val1, $val2){
        $this->_nama = $val1;
        $this->_harga = $val2;
    }

    public function getNama(){
        return $this->_nama;
    }

    public function getHarga(){
        return $this->_harga;
    }
}

?>