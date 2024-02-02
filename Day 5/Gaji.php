<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji</title>
</head>
<body>
    <form action="" method="post">
        <label for="pokok">Gaji Pokok</label><br>
        <input type="number" id="pokok" name="pokok"><br><br>
        <label for="tunjangan">Tunjangan</label><br>
        <input type="number" id="tunjangan" name="tunjangan"><br><br>
        <label for="potongan">potongan</label><br>
        <input type="number" id="potongan" name="potongan"><br><br>
        <input type="submit" value="Submit">
    </form> 

    <?php 
    
    function hitung($pokok, $tunjangan, $potongan){
        $bruto = $pokok + $tunjangan;
        $pajak = $bruto * 0.1;
        $asuransi = $bruto * 0.05;
        $bersih = $bruto - ($pajak + $asuransi);
         
        echo "<p>Bruto anda $bruto</p>";
        echo "<p>Pajak anda $pajak</p>";
        echo "<p>Asuransi anda $asuransi</p>";
        echo "<p>Gaji bersih anda $bersih</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $pokok = $_POST["pokok"];
        $tunjangan = $_POST["tunjangan"];
        $potongan = $_POST["potongan"];

        hitung($pokok, $tunjangan, $potongan);

    }
    ?>


</body>
</html>