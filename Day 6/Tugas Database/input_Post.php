<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($db, $_POST["judul"]);
    $konten = mysqli_real_escape_string($db, $_POST["konten"]);
    $kategori = mysqli_real_escape_string($db, $_POST["kategori"]);

    $image_path = "uploads/";
    $image_name = $_FILES["image_url"]["name"];
    $image_tmp = $_FILES["image_url"]["tmp_name"];
    $image_url = $image_path . $image_name;

    move_uploaded_file($image_tmp, $image_url);

    $sql = $db->prepare("INSERT INTO posting (judul, konten, kategori, image_url) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $judul, $konten, $kategori, $image_url);

    if ($sql->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql->error;
    }

    $sql->close();
}

$db->close();
?>
