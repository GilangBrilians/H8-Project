<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];


//     if ($username === "test" && $password === "test") {
//         $_SESSION['admin_logged_in'] = true;
//         session_start();
//         header("Location: index_admin.php");
//         exit();
//     } else {
//         $login_error = "Invalid username or password";
//         echo $login_error;
//     }
    
// }

session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

    $result = $db->query("SELECT * FROM pengguna WHERE username = '$username'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['password']) {
            $_SESSION['admin_logged_in'] = true;
            header("Location: index_admin.php");
            exit();
        } else {
            echo "Invalid username or password <a href='login.php'>Back</a></div>";

        }
    } else {
        echo "Invalid username or password <a href='login.php'>Back</a></div>";

    }

    $db->close();
}






?>