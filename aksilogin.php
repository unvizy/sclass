<?php
session_start();
include "koneksi.php";
$username = $_POST["username"];
$password = md5($_POST['password']);

$data1 = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username'");
$cek = mysqli_num_rows($data1);


if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if($cek >= 1){
    $data2 = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password'");
    $cek1 = mysqli_num_rows($data2);
    if($cek1 >= 1){
        $row = mysqli_fetch_array($data2);
        if($row['level'] == 1){
            $_SESSION['level'] = "admin";
            $_SESSION['admin'] = $username;
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='admin/index.php';
            </script>");
        }elseif($row['level'] == 2){
            $_SESSION['level'] = "siswa";
            $_SESSION['siswa'] = $username;
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Selamat Datang Di Halaman Siswa !');
            window.location.href='siswa/index.php';
            </script>");
        }
    }else{
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password Anda Salah!');
    window.location.href='login.php';
    </script>");
    }
}else{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Username tidak terdaftar');
    window.location.href='login.php';
    </script>");
// var_dump($username);
}
