<?php
session_start();
include "koneksi.php";

$_SESSION['admin_logged_in'] = array();

session_destroy();

header("Location: index.php");
exit();
?>
