<html> 

<head>
    <title> Rectangle </title>
</head>

<body>
    <form action="rectangle.php" method="post">
        Panjang <input type="text" name="panjang">
        <br>
        Lebar <input type="text" name="lebar">
        <br>
        <br>

        <input type="submit" value="HITUNG" >
    </form>
    

    <?php

        class Rectangle {
            public $panjang;
            public $lebar;

            public function setPanjang($panjang){
                $this->panjang = $panjang;
            }

            public function setLebar($lebar){
                $this->lebar = $lebar;
            }

            public function perimeter(){
                return ($this->panjang + $this->lebar) * 2;
            }
        }

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $panjang = $_POST["panjang"];
            $lebar = $_POST["lebar"];

            $myRect = new Rectangle();
            $myRect->setPanjang($panjang);
            $myRect->setLebar($lebar);

            echo "Kelilingnya adalah " . (string)($myRect->perimeter());
        }

    ?>
</body>

</html>