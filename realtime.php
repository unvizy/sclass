<?php
include "koneksi.php";
$data_kelas = $_GET["kelas"];
$data_suhu = $_GET['suhu'];
$kelembaban = $_GET['kelembaban'];


$data_lampu = mysqli_query($koneksi, "SELECT * FROM data_kelas WHERE nama_kelas='$data_kelas'");
$row = mysqli_fetch_array($data_lampu);

        echo "{$row['lampu_1']}{$row['lampu_2']}{$row['lampu_3']}{$row['lampu_4']}";
?>