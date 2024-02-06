<!DOCTYPE html>
<html lang="en">

<?php 
include 'koneksi.php';
$db = new database();
?>

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
            <h3 class="col-md-10">Update kontak</h3>
            <a href="index.php" class="btn btn-warning col-md-2">kembali</a>
        </div>
        <form action="proses.php?aksi=update" method="post" class="mt-5">
            <?php foreach($db->edit($_GET['id']) as $d){ ?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'] ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $d['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="nomor_telpon">Nomor Telpon</label>
                    <input type="text" class="form-control" id="nomor_telpon" name="nomor_telpon" value="<?php echo $d['nomor_telpon'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php } ?>
        </form>
    </div>
            

    <!-- Include Bootstrap JS and Popper.js (for Bootstrap modal) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
