<?php
include('cek-login.php');
include('../koneksi.php');
$select = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$_SESSION[admin]'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Smart Class By HSTKI 2021">
    <meta name="description" content="Smart Class Himpunan Siswa Teknik Komputer Informatika">
    <meta name="keywords" content="smart class">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Indonesia">

    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/resvonsive.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/style-loreg.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../assets/img/fav.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d8ab9fc50e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>Setting || Smart Class || HSTKI</title>
</head>

<body>
    <div class="p-4 bg-1-body">
        <div class="d-flex">
            <div class="side-menu mt-4 mb-4">
                <img src="assets/img/logo.png" alt="logo" class="mb-5">
                <a href="index.php" class="putih">
                    <li><i class="ri-dashboard-fill"></i>&ensp; Dashboard</li>
                </a>
                <a href="control.php?ruang=SIJA" class="putih">
                    <li><i class="ri-sound-module-line"></i>&ensp; Controling</li>
                </a>
                <a href="monitoring.php" class="putih">
                    <li><i class="far fa-chart-bar"></i>&ensp; Monitoring</li>
                </a>
                <a href="setting.php" class="putih">
                    <li class="active-menu"><i style="font-size: 1.5vw;" class="ri-settings-6-line"></i>&ensp; Settings</li>
                </a>

                <div class="bottom-li">
                    <li class="putih"><i class="fas fa-sign-out-alt"></i>&ensp; Logout</li>
                    <li class="bantuan-li">&ensp; Butuh Bantuan &ensp;<i class="fas fa-comments"></i></li>
                </div>
            </div>
            <div class="main-side mts-4">
                <div class="d-flex">
                    <div class="welcome-text">
                        <h6 class="selamat-datang">Selamat Datang di,</h6>
                        <h3 class="selamat-nama" class="mb-2" style="color:#5E5E73; font-weight:800;">Setting</h3>
                    </div>
                    <div class="height search-wraper  d-flex justify-content-end align-items-center">
                        <div class="search-wrap">
                            <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Search"> </div>
                        </div>
                        <div class="notif">
                            <i class="ri-download-2-line"></i>
                        </div>
                        <div class="notif">
                            <i class="far fa-bell"></i>
                        </div>

                    </div>
                </div>
                <div class="card-moni-utama">
                    <div class="d-flex">
                        <div class="dot"></div>
                        <span class="dot-text">Pengaturan Akun</span>
                    </div>
                    <form action="setting-aksi.php" method="POST">
                        <?php
                        while ($fetch = mysqli_fetch_array($select)) { ?>
                            <input type="hidden" name="id" value="<?php echo "$fetch[id]"; ?>">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Nama Lengkap</label>
                                <input type="text" name="fullname" class="form-control bg-grey" id="fullName" value="<?php echo "$fetch[fullname]"; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control bg-grey" id="inputUsername" value="<?php echo "$fetch[username]"; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Alamat Email</label>
                                <input type="email" name="email" class="form-control bg-grey" id="inputEmail" value="<?php echo "$fetch[email]"; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label mb-3">Password</label>
                                <input type="password" name="password" id="password" oninput="strengthChecker()" maxlength="55" class="form-control bg-grey" placeholder="Masukan kata sandi" required>
                                <span id="toggle" onclick="toggle()">
                                    <i class="fas fa-eye"></i>
                                </span>
                                <div id="strength-bar"></div>
                                <p id="msg"></p>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="button-simpan">Simpan</button>
                            </div>
                </div>
                </form>

                <div class="nav-bawah">
                    <a class="mr-10 abu-nav" href="index.php">
                        <i class="ri-dashboard-fill"></i>
                    </a>
                    <a class="mr-10 abu-nav" href="control.php?ruang=SIJA">
                        <i class="ri-sound-module-line"></i>
                    </a>
                    <a class="mr-10 badge-gradien-biru-2" href="../logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <a class="mr-10 abu-nav" href="monitoring.php">
                        <i class="ri-open-arm-line"></i>
                    </a>
                    <a class="mr-10 nav-act" href="setting.php">
                        <i class="ri-settings-4-line biru"></i>
                    </a>
                </div>
            <?php } ?>



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