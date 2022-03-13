<?php
include '../../koneksi.php';

$lampu = $_POST['lampu'];
$kelas = $_POST['kelas'];




// if (empty($lampu)) {
//     $arr = array();
//     $arr['info'] = 'error4';
//     $arr['msg'] = 'lampu tidak ada';

//     echo json_encode($arr);
//     exit();
// }
// if ($status = "") {
//     $arr = array();
//     $arr['info'] = 'error3';
//     $arr['msg'] = 'status tidak ada';

//     echo json_encode($arr);
//     exit();
// }
// if (empty($kelas)) {
//     $arr = array();
//     $arr['info'] = 'error2';
//     $arr['msg'] = 'kelas tidak ada';

//     echo json_encode($arr);
//     exit();
// }
$getData = mysqli_query($koneksi,"SELECT * FROM data_kelas WHERE nama_kelas = '$kelas'");
$rowData = mysqli_fetch_array($getData);

if($rowData["lampu_$lampu"] == "0"){
    $status = '1';
    $textToast = "Dinyalakan";
    $riwayat = mysqli_query($koneksi,"INSERT INTO riwayat (des,ruang,waktu,type)VALUES('Lampu {$lampu} {$textToast}','$kelas','$tanggal','1')");
    $update = mysqli_query($koneksi,"UPDATE data_kelas SET lampu_$lampu = '$status' WHERE nama_kelas = '$kelas'");
if($update){
    echo "Lampu {$lampu} Ruang {$kelas} {$textToast} ";
}else{
    echo "ERROR";
}
}else{
    $status = '0';
    $textToast = "Dimatikan";
        $riwayat = mysqli_query($koneksi,"INSERT INTO riwayat (des,ruang,waktu,type)VALUES('Lampu {$lampu} {$textToast}','$kelas','$tanggal','1')");
    $update = mysqli_query($koneksi,"UPDATE data_kelas SET lampu_$lampu = '$status' WHERE nama_kelas = '$kelas'");
if($update){
    echo "Lampu {$lampu} Ruang {$kelas} {$textToast} ";
}else{
    echo "ERROR";
}
}






