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
            <a href="/" class="btn btn-warning col-md-2">kembali</a>
        </div>
        @foreach($kontak as $kontak)
        <div class="container mt-5">
            <form action="/update" method="post" class="mt-3">
                @csrf
                <input type="hidden" name="id" value="{{ $kontak->id }}">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" required="required" id="nama" name="nama" value="{{ $kontak->nama }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required="required" id="email" name="email" value="{{ $kontak->email }}">
                </div>
                <div class="form-group">
                    <label for="nomor_telpon">Nomor Telpon</label>
                    <input type="text" class="form-control" required="required" id="nomor_telpon" name="nomor_telpon" value="{{ $kontak->nomor_telpon }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
        @endforeach

    </div>
            

    <!-- Include Bootstrap JS and Popper.js (for Bootstrap modal) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
