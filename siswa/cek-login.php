<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['siswa'])) {
	//redirect ke halaman login
	header('location:../login.php');
}
?>