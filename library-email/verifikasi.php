<?php
include "../koneksi.php";
if (isset($_GET["Vkey"])) {
	$Vkey = $_GET["Vkey"];
	$input_data = mysqli_query($koneksi, "UPDATE akun SET Verified= 1 WHERE Vkey='$Vkey' ");
	if ($input_data) {
		header("Location: success-verifikasi.php");
	} else {
		die("Terjadi Kesalahan...");
	}
} else {

	die("Terjadi Kesalahan...");
}
