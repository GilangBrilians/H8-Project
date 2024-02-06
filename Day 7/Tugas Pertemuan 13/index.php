<!DOCTYPE html>

<?php 
include "koneksi.php";
$db = new database();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <h3 class="col-md-10">Data kontak</h3>
            <a href="input.php" class="btn btn-primary col-md-2 mb-3">Tambah Data</a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telpon</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($db->kontak() as $x){
                ?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $x['id']; ?></td>
                    <td><?php echo $x['nama']; ?></td>
                    <td><?php echo $x['email']; ?></td>
                    <td><?php echo $x['nomor_telpon']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>            
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and Popper.js (for Bootstrap modal) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
