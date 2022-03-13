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

    <title>Halaman daftar</title>
</head>

<body>

    <div class="wrapper">
        <div class="row">
            <div class="col-md-5 img1">
                <div class="img" aria-hidden="true"></div>
            </div>
            <div class="col-md-5">
                <h1 class="margin-h1">Daftar ke Smart Class</h1>
                <form action="aksiregister.php" method="POST" class="row">
                    <?php
                    include "koneksi.php";
                    $data = mysqli_query($koneksi, "SELECT * FROM user_lv WHERE level='2'");
                    $fetch = mysqli_fetch_array($data);
                    ?>
                    <input class="form-control" type="hidden" name="level" value="<?php echo $fetch['level'] ?>">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Nama Lengkap</label>
                        <input type="text" name="fullname" class="form-control bg-grey" id="inputName" placeholder="Masukan nama">
                    </div>
                    <div class="col-md-6">
                        <label for="inputUsername" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control bg-grey" id="inputUsername" placeholder="Masukan nama pengguna">
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail" class="form-label">Alamat Email</label>
                        <input type="email" name="email" class="form-control bg-grey" id="inputEmail" placeholder="Masukan email">
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label mb-3">Password</label>
                        <input type="password" name="password" id="password" oninput="strengthChecker()" maxlength="55" class="form-control bg-grey" placeholder="Masukan kata sandi">
                        <span id="toggle" onclick="toggle()">
                            <i class="fas fa-eye"></i>
                        </span>
                        <div id="strength-bar"></div>
                        <p id="msg"></p>
                    </div>
                    <div class="col-md-12">
                        <label for="inputConfirmPassword" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="passwordConfirm" id="password2" class="form-control bg-grey mb-3" maxlength="55" id="inputConfirmPassword" placeholder="Masukan kata sandi kembali">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn-1">Daftar</button>
                        <span class="link-login">Sudah punya akun? <a href="login.php">Masuk</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        let parameters = {
            count: false,
            letters: false,
            numbers: false,
            special: false
        }
        let strengthBar = document.getElementById("strength-bar");
        let msg = document.getElementById("msg");

        function strengthChecker() {
            let password = document.getElementById("password").value;

            parameters.letters = (/[A-Za-z]+/.test(password)) ? true : false;
            parameters.numbers = (/[0-9]+/.test(password)) ? true : false;
            parameters.special = (/[!\"$%&/()=?@~`\\.\';:+=^*_-]+/.test(password)) ? true : false;
            parameters.count = (password.length > 7) ? true : false;

            let barLength = Object.values(parameters).filter(value => value);

            console.log(Object.values(parameters), barLength);

            strengthBar.innerHTML = "";
            for (let i in barLength) {
                let span = document.createElement("span");
                span.classList.add("strength");
                strengthBar.appendChild(span);
            }

            let spanRef = document.getElementsByClassName("strength");
            for (let i = 0; i < spanRef.length; i++) {
                switch (spanRef.length - 1) {
                    case 0:
                        spanRef[i].style.background = "#ff3e36";
                        msg.textContent = "Your password is very weak";
                        break;
                    case 1:
                        spanRef[i].style.background = "#ff691f";
                        msg.textContent = "Your password is weak";
                        break;
                    case 2:
                        spanRef[i].style.background = "#ffda36";
                        msg.textContent = "Your password is good";
                        break;
                    case 3:
                        spanRef[i].style.background = "#0be881";
                        msg.textContent = "Your password is strong";
                        break;
                }
            }
        }


        function toggle() {
            let password = document.getElementById("password");
            let eye = document.getElementById("toggle");

            if (password.getAttribute("type") == "password") {
                password.setAttribute("type", "text");
                eye.style.color = "#0be881";
            } else {
                password.setAttribute("type", "password");
                eye.style.color = "#808080";
            }
        }

        function toggle2() {
            let password = document.getElementById("password2");
            let eye = document.getElementById("toggle2");

            if (password.getAttribute("type") == "password") {
                password.setAttribute("type", "text");
                eye.style.color = "#0be881";
            } else {
                password.setAttribute("type", "password");
                eye.style.color = "#808080";
            }
        }
    </script>
</body>

</html>