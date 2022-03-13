<?php
include "koneksi.php";
// location template
$template_file = "library-email/template-verif.php";

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$passwordConfirm = md5($_POST['passwordConfirm']);
$level = $_POST["level"];

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' or email='$email'"));
if ($cek > 0) {
    echo "<script>window.alert('Username atau Email yang anda masukan sudah ada !')
    window.location='register.php'</script>";
} elseif ($password !== $passwordConfirm) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('KONFIRMASI PASSWORD TIDAK SESUAI');
    window.location.href='register.php';
    </script>");
} else {
    require_once('library-email/fungsi_cpanel.php');
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $passwordConfirm = md5($_POST['passwordConfirm']);
    $level = $_POST["level"];
    $Vkey = md5(time() . $password);

    $query_sql = mysqli_query($koneksi, "INSERT INTO akun (fullname, email, username, password, level, Vkey) VALUES ('$fullname' , '$email', '$username', '$password', '$level', '$Vkey')");

    if ($query_sql) {
        $to = $email;
        $subject = "Email Verification";
        $headers = "From: Admin HSTKI SCLASS \r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type:text/html; charset=iso-8859-1' . "\r\n";

        if(file_exists($template_file))
        $message = file_get_contents($template_file);
        else
        die ("unable to locate template");
        
        include "library-email/alert.php";

        smtp_mail($to, $subject, $message, '', '', 0, 0, false);
        die(" ");
    }
}
