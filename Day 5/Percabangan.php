<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Logika Percabangan</title>
</head>
<body>


<form action="" method="post">
    <label for="nilai">Nilai anda</label><br>
    <input type="text" id="nilai" name="nilai"><br><br>
    <input type="submit" value="Submit">
</form> 

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $nilai = $_POST["nilai"];

        if($nilai >= 85){
            $peringkat = "A";
        }
        else if($nilai >= 75){
            $peringkat = "B";
        }
        else if ($nilai >= 60){
            $peringkat = "C";
        }
        else if ($nilai >= 50){
            $peringkat = "D";
        }
        else {
        $peringkat ="E";
    }
        echo $peringkat;
    }
    ?>

    
</body>
</html>