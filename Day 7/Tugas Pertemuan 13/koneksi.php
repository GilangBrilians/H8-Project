<?php

class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "h8_day7";
    var $conn; 
    
    public $nama;
    public $email;
    public $nomor_tepon;

	function __construct(){
		$this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
	}

    function kontak(){
        $sql = "SELECT * FROM kontak";
        $result = $this->conn->query($sql);
        $kontak = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $kontak[] = $row;
            }
        }
        return $kontak;
    }

    function input($nama, $email, $nomor_telpon){
        $this->nama = $nama;
        $this->email = $email;
        $this->nomor_telpon = $nomor_telpon;
        $sql = "INSERT INTO kontak (nama, email, nomor_telpon) VALUES ('$nama', '$email', '$nomor_telpon')";
        if ($this->conn->query($sql) === TRUE) {
            echo "Data berhasil ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    function hapus($id){
        $sql = "DELETE FROM kontak WHERE id='$id'";
        if ($this->conn->query($sql) === TRUE) {
            echo "Data berhasil dihapus";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }
    }

    function edit($id){
        $sql = "SELECT * FROM kontak WHERE id='$id'";
        $result = $this->conn->query($sql);
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }
    
    function update($id, $nama, $email, $nomor_telpon){
        
        $sql = "UPDATE kontak SET nama='$nama', email='$email', nomor_telpon='$nomor_telpon' WHERE id='$id'";
        if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $this->conn->error;
        }
    }
    
} 
 


?>
