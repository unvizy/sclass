<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style-loreg.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="assets/img/fav.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

    <title>Halaman login</title>
</head>

<body>

    <div class="wrapper">
        <div class="row custom-flex">
            <div class="col-md-5 img1">
                <div class="img" aria-hidden="true"></div>
            </div>
            <div class="col-md-5">
                <h1 class="margin-h2">Masuk ke Smart Class</h1>
                <form action="aksilogin.php" method="POST" class="row">
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "SELECT * FROM user_lv WHERE level='2'");
                    $fetch = mysqli_fetch_array($data);
                    ?>
                    <input class="form-control" type="hidden" name="level" value="<?php echo $fetch['level'] ?>">
                    <div class="col-md-12">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control bg-grey" id="username" placeholder="Masukan nama pengguna">
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label mb-3">Password</label>
                        <input type="password" name="password" id="password" oninput="strengthChecker()" maxlength="55" class="form-control bg-grey" placeholder="Masukan kata sandi">
                        <span id="toggle" onclick="toggle()">
                            <i class="fas fa-eye"></i>
                        </span>
                        <p id="msg"></p>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn-1">Masuk</button>
                        <br>
                        <br>
                        <span class="link-login">Belum punya akun? &ensp;<a href="register.php">Daftar</a></span>
                        <br><span class="link-login"><a href="library-email/forgot_password.html">Lupa kata sandi ? </a>&ensp;</span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>