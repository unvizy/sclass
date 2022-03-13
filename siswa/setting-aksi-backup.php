<?php
session_start();
include "../koneksi.php";

if (isset($_POST['Ganti'])) {
    $passwordLama = $_POST['passwordLama'];
    $passwordBaru = $_POST['passwordBaru'];
    $passwordConfirm = $_POST['passwordConfirm'];

    $passwordLama = md5('passwordLama');
    $data4 = mysqli_query($koneksi, "SELECT * FROM akun WHERE password='$passwordLama'");
    $cek = mysqli_num_rows($data4);

    if ($cek >= 1) {


        if ($passwordBaru == $passwordConfirm) {
            $passwordBaru     = md5($passwordBaru);
            $id_user         = $_SESSION['username'];

            $update         = mysqli_query($koneksi, "UPDATE akun SET password='$password_baru' WHERE username='$id_user'");
            if ($update) {
                echo 'Password berhasil di rubah';
            } else {
                echo 'Gagal merubah password';
            }
        } else {

            echo 'Konfirmasi password tidak cocok';
        }
    } else {
        echo 'Password Lama Tidak Sesuai';
    }
}
