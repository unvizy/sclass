<?php
include "../koneksi.php";
$Vkey = $_POST["Vkey"];
$password = md5($_POST["password"]);
$input_data = mysqli_query($koneksi, "UPDATE akun SET password = '$password' WHERE Vkey='$Vkey' ");
if ($input_data) {
    header("Location: success-reset.php");
} else {
    die("Terjadi Kesalahan...");
}
