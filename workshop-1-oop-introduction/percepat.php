<!DOCTYPE html>
<html>
<head>
	<title>Workshop Pertambahan</title>
</head>
<body>

    <?php 
        class Car
        {
            // Deklarasikan Properties
            public $transmisi = "Manual";
            public $kecepatan = 0;

            // Deklarasikan Method 
            public function Percepat($kecepatan) {
                $this->kecepatan += $kecepatan;
            }
        }

        $myCar = new Car();
        
		// GET
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
            

			$percepatan = $_POST["percepatan"];
            $sekarang = 0;

            try {
                $sekarang = $_POST["sekarang"];
            } catch(Exception $e) {}

            $myCar->kecepatan = $sekarang;
            
            $myCar->Percepat($percepatan);

            echo "Kecepatan Sekarang " . $myCar->kecepatan;

		}
	 ?>

	<form action="percepat.php" method="post">
	 		<input type="text" name="percepatan">
             <input type="hidden" name="sekarang" value=<?php echo $myCar->kecepatan; ?>>
	 		<br/>
	 		<input type="submit" name="" value="PERCEPAT">
	 </form>

	
</body>
</html>