<?php
include "koneksi.php";
$suhu = $_GET["suhu"];
$kelembaban = $_GET["kelembaban"];
$kelas = $_GET['kelas'];

$updt = mysqli_query($koneksi, "UPDATE data_kelas SET suhu = '$suhu' , kelembaban = '$kelembaban' WHERE nama_kelas='$kelas'");

if($updt){
    echo"berhasil";
}else{
    echo"gagal";
}

?>