<?php

class Seller {
    private $_nama;
    private $_url;

    private $_product;

    public function setProduct($val){
        $this->_product = $val;
    }

    public function __construct($val1, $val2){
        $this->_nama = $val1;
        $this->_url = $val2;
    }

    public function __toString(){
        return "Seller dengan <br>" . 
            "&nbsp Nama : " . $this->_nama . "<br>" .
            "&nbsp URL : " . $this->_url . "<br><br>" . 
            "Menjual PRODUK dengan <br>" . 
            "&nbsp Nama :" . $this->_product->getNama() . "<br>" . 
            "&nbsp Harga :" .$this->_product->getHarga();
    }
}

?>