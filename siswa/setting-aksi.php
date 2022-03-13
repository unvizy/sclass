<?php
include '../koneksi.php';
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "UPDATE akun SET fullname='$fullname', username='$username', email='$email', password='$password' WHERE id='$id'");

if ($query) {
    echo "<script>
            alert('Berhasil, Silahkan Login Kembali');
            window.location.href='../logout.php';
		  </script>";
} else {
    echo "gagal ubah data";
}
