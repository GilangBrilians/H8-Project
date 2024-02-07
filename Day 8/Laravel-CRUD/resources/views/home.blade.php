<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kontak</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <h3 class="col-md-10">Data Kontak</h3>
            <a href="/input" class="btn btn-primary col-md-2 mb-3">Tambah Data</a>
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
                @foreach($kontak as $kontak)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $kontak->id }}</td>
                    <td>{{ $kontak->nama }}</td>
                    <td>{{ $kontak->email }}</td>
                    <td>{{ $kontak->nomor_telpon }}</td>
                    <td>
                        <a href="/edit/{{ $kontak->id }}">Edit</a>
                        |
                        <a href="/delete/{{ $kontak->id }}">Hapus</a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and Popper.js (for Bootstrap modal) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
