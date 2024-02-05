<?php

    class database{
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "h8_day6";
        
        function __construct(){
            $koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if($koneksi){
                echo "berhasil";
            } else {
                echo "gagal";
            }
        }
    }
    $koneksi = new database();
?>