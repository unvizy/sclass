<?php
include "koneksi.php";
$id = $_GET["id"];
$kelas = $_GET["kelas"];


$data_kelas = mysqli_query($koneksi, "SELECT * FROM data_kelas WHERE nama_kelas='$kelas'");
$row = mysqli_fetch_array($data_kelas);

$data_guru = mysqli_query($koneksi, "SELECT * FROM data_guru WHERE id_guru='$id'");
$rows = mysqli_fetch_array($data_guru);
$cek = mysqli_num_rows($data_guru);

$id_check = mysqli_query($koneksi, "SELECT * FROM unregister WHERE id_kartu='$id'");
$check = mysqli_num_rows($id_check);

if($cek <= 0){
    if($check > 0){
        echo "Silahkan Input Data";
    }else{
    $query = mysqli_query($koneksi,"INSERT INTO unregister (id_kartu) VALUES ('$id')");
    if($query){
        echo "Data Telah Masuk , Silahkan Input Data";
    }
    }
}else{
    
if($row["id_guru"] == "") {
    $update = mysqli_query($koneksi, "UPDATE data_kelas SET id_guru = '$id' WHERE nama_kelas='$kelas'");
    if($update){
        echo "1";
    }
}else{
   if($row["id_guru"] == $id){
    $update = mysqli_query($koneksi, "UPDATE data_kelas SET id_guru = '' WHERE nama_kelas='$kelas'");
    if($update){
        echo "2";
    }
}else{
    echo "3";
}
}
}


