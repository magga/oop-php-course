<html> 

<head>
    <title> Kalkulator </title>
</head>

<body>
    <form action="kalkulator.php" method="post">
        Angka 1 <input type="text" name="angka1">
        <br>
        Angka 2 <input type="text" name="angka2">
        <br>
        <br>

        <input type="submit" name="tambah" value="TAMBAH" >
        <input type="submit" name="kurang" value="KURANG" >
        <input type="submit" name="kali" value="KALI" >
        <input type="submit" name="bagi" value="BAGI" >
    </form>
    

    <?php

        class Calculator {
            public $angka1;
            public $angka2;

            public function setAngka1($angka1){
                $this->angka1 = $angka1;
            }

            public function setAngka2($angka2){
                $this->angka2 = $angka2;
            }

            public function tambah(){
                return $this->angka1 + $this->angka2;
            }

            public function kurang(){
                return $this->angka1 - $this->angka2;
            }

            public function kali(){
                return $this->angka1 * $this->angka2;
            }

            public function bagi(){
                return $this->angka1 / $this->angka2;
            }
        }

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $angka1 = $_POST["angka1"];
            $angka2 = $_POST["angka2"];

            $myCalc = new Calculator();
            $myCalc->setAngka1($angka1);
            $myCalc->setAngka2($angka2);

            if(isset($_POST["tambah"])){
                echo "Hasil Tambah adalah ".$myCalc->tambah();
            } else if(isset($_POST["kurang"])){
                echo "Hasil Kurang adalah ".$myCalc->kurang();
            } else if(isset($_POST["kali"])){
                echo "Hasil Kali adalah ".$myCalc->kali();
            } else if(isset($_POST["bagi"])){
                echo "Hasil Bagi adalah ".$myCalc->bagi();
            }
        }        
        

        

    ?>
</body>

</html>