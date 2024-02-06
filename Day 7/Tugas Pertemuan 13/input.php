<!DOCTYPE html>
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
            <h3 class="col-md-10">Update kontak</h3>
            <a href="index.php" class="btn btn-warning col-md-2">kembali</a>
        </div>
        <form action="proses.php?aksi=tambah" method="post">               
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="nomor_telpon">Nomor Telpon</label>
                <input type="text" class="form-control" id="nomor_telpon" name="nomor_telpon" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and Popper.js (for Bootstrap modal) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
