<?php

class Invoice {
    private $_partNumber;
    private $_partDescription;
    private $_quantity;
    private $_price;

    public function __construct($partNumber, $partDescription, $quantity, $price){
        $this->_partNumber = $partNumber;
        $this->_partDescription = $partDescription;
        $this->_quantity = $quantity;
        $this->_price = $price;
    }

    public function getInvoiceAmount(){
        if ($this->_price < 0) {
            $this->_price = 0;
        } 
        
        if($this->_quantity < 0) {
            $this->_quantity = 0;
        }

        return $this->_quantity * $this->_price;
    }
}

echo "Invoice Pertama dengan detail object : <br>";

$firstInvoice = new Invoice("ABC123", "Ban Mobil Dunlop", 3, 100000);

print_r($firstInvoice);

echo "<br><br>";

echo "Get Invoice Amount : " . (string)($firstInvoice->getInvoiceAmount()) . "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////

echo "Invoice Kedua {Quantity Negatif} dengan detail object : <br>";

$secondInvoice = new Invoice("DEF456", "Spion Lamborghini", -4, 5000000);

print_r($secondInvoice);

echo "<br><br>";

echo "Get Invoice Amount : " . (string)($secondInvoice->getInvoiceAmount()) . "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////

echo "Invoice Ketiga {Price Negatif} dengan detail object : <br>";

$thirdInvoice = new Invoice("GHI789", "Kaca Film V-Kool", 19, -300000);

print_r($thirdInvoice);

echo "<br><br>";

echo "Get Invoice Amount : " . (string)($thirdInvoice->getInvoiceAmount()) . "<br><br>";


?>