<!DOCTYPE html>
<html lang="en">

<?php 
session_start();
include "koneksi.php";
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>   
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="input.php">New Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Create a New Blog Post</h2>
        <form action="input_Post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">judul:</label>
                <input type="text" class="form-control" name="judul" required>
            </div>

            <div class="form-group mt-4">
                <label for="konten">konten:</label>
                <textarea class="form-control" name="konten" rows="5" required></textarea>
            </div>

            <!-- <div class="form-group">
                <label for="kategori">kategori:</label>
                <input type="text" class="form-control" name="kategori" required>
            </div> -->

            <div class="input-group mb-3 mt-4 w-100">
                <select class="custom-select" name="kategori" required>
                    <option selected>Choose...</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Hiburan">Hiburan</option>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="kategori">Options</label>
                </div>
            </div>

            <div class="form-group mt-4 mb-4">
                <label for="image_url">Blog Image :</label>
                <input type="file" class="form-control-file" name="image_url" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
