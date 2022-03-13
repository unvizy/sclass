<?php
session_start();
include "../koneksi.php";

if (isset($_GET['ruang'])) {
    $ruang = $_GET['ruang'];
}

$datalampu = mysqli_query($koneksi, "SELECT * FROM data_kelas WHERE nama_kelas = '$ruang'");
$rowLampu = mysqli_fetch_array($datalampu);
$dataKelas = mysqli_query($koneksi, "SELECT * FROM data_kelas");
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

    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/resvonsive.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="../assets/img/fav.png" sizes="16x16" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d8ab9fc50e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>Controling || Smart Class || HSTKI</title>
</head>

<body>
    <div class="p-4 bg-1-body">
        <div class="flex-custom">
            <div class="side-menu mt-4 mb-4">
                <img src="assets/img/logo.png" alt="logo" class="mb-5">
                <a href="index.php" class="putih">
                    <li><i class="ri-dashboard-fill"></i>&ensp; Dashboard</li>
                </a>
                <a href="control.php?ruang=SIJA" class="">
                    <li class="active-menu"><i class="ri-sound-module-line"></i>&ensp; Controling</li>
                </a>
                <a href="monitoring.php" class="putih">
                    <li><i class="far fa-chart-bar"></i>&ensp; Monitoring</li>
                </a>
                <a href="setting.php" class="putih">
                    <li><i style="font-size: 1.5vw;" class="ri-settings-6-line"></i>&ensp; Settings</li>
                </a>

                <div class="bottom-li">
                    <a class="putih" href="../logout.php">
                        <li><i class="fas fa-sign-out-alt"></i>&ensp; Logout</li>
                    </a>
                    <li class="bantuan-li">&ensp; Butuh Bantuan &ensp;<i class="fas fa-comments"></i></li>
                </div>
            </div>
            <div class="main-side mts-4">
                <h6 class="selamat-datang" style="color: #5E5E73;">Selamat Datang di,</h6>
                <h3 class="selamat-nama" class="mb-2" style="color:#5E5E73; font-weight:800;">Controling Page</h3>
                <div class="d-flex">
                    <div class="side-control">
                        <div class="card-side-lampu mt-4">
                            <div class="d-flex">
                                <div style="width: 1.2vw; border-radius:5px; margin-right: 0.6vw; height:0.8vw; background-color:#194AF1;"></div>
                                <span style="margin-top: -0.3vw; font-size: 1vw; font-weight:600;">Lampu</span>
                            </div>
                            <div class="card-scroll-lampu">
                                <li class="d-flex side-card-items">
                                    <img src="assets/img/lampu-icon.png" alt="suhu">
                                    <div class="text-suhu">
                                        <span style="font-weight: 700; font-size:1vw;">Lampu 1</span>
                                        <div class="d-flex">
                                            <input onchange="lampu(1,'<?php echo $ruang ?>');" type="range" value="<?php echo $rowLampu['lampu_1'] ?>" min="0" max="1" step="1">
                                            <p style="font-size: 1vw; font-weight:400; width: 3vw ; margin-left:1vw; margin-top:0.2vw;">On</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex side-card-items">
                                    <img src="assets/img/lampu-icon.png" alt="suhu">
                                    <div class="text-suhu">
                                        <span style="font-weight: 700; font-size:1vw;">Lampu 2</span>
                                        <div class="d-flex">
                                            <input onchange="lampu(2,'<?php echo $ruang ?>');" type="range" value="<?php echo $rowLampu['lampu_2'] ?>" min="0" max="1" step="1">
                                            <p style="font-size: 1vw; font-weight:400; width: 3vw ; margin-left:1vw; margin-top:0.2vw;">On</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex side-card-items">
                                    <img src="assets/img/lampu-icon.png" alt="suhu">
                                    <div class="text-suhu">
                                        <span style="font-weight: 700; font-size:1vw;">Lampu 3</span>
                                        <div class="d-flex">
                                            <input onchange="lampu(3,'<?php echo $ruang ?>');" type="range" value="<?php echo $rowLampu['lampu_3'] ?>" min="0" max="1" step="1">
                                            <p style="font-size: 1vw; font-weight:400; width: 3vw ; margin-left:1vw; margin-top:0.2vw;">On</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex side-card-items">
                                    <img src="assets/img/lampu-icon.png" alt="suhu">
                                    <div class="text-suhu">
                                        <span style="font-weight: 700; font-size:1vw;">Lampu 4</span>
                                        <div class="d-flex">
                                            <input onchange="lampu(4,'<?php echo $ruang ?>');" type="range" value="<?php echo $rowLampu['lampu_4'] ?>" min="0" max="1" step="1">
                                            <p style="font-size: 1vw; font-weight:400; width: 3vw ; margin-left:1vw; margin-top:0.2vw;">On</p>
                                        </div>
                                    </div>
                                </li>

                            </div>
                        </div>
                        <div class="card-side-pintu">
                            <div class="d-flex">
                                <div style="width: 1.2vw; border-radius:5px; margin-right: 0.6vw; height:0.8vw; background-color:#194AF1;"></div>
                                <span style="margin-top: -0.3vw; font-size: 1vw; font-weight:600;">Pintu</span>
                            </div>
                            <br>
                            <li class="d-flex side-card-items align-items-center justify-content-between mt-3">
                                <div class="text-suhu d-flex align-items-center">
                                    <img src="assets/img/pintu-icon.png" alt="suhu">
                                    <span style="font-weight: 700; font-size:1vw;">&emsp;Pintu Utama</span>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                </div>
                            </li>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mts-4s">
                <div class="mts-4 me-3 row height d-flex justify-content-end align-items-center">
                    <div class="col-md-4">
                        <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Search"> </div>
                    </div>
                    <div class="col-md-1 notif">
                        <i class="fas fa-history"></i>
                    </div>
                    <div class="col-md-1 notif">
                        <i class="far fa-bell"></i>
                    </div>

                </div>
                <div class="card-side-suhu">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex suhu-text-card">
                            <div class="dot"></div>
                            <span class="dot-text">Suhu</span>
                        </div>
                        <div class="kelas-drop d-flex align-items-center dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><?php echo $ruang ?></span>
                        </div>
                        <ul class="dropdown-menu">
                            <?php
                            while ($rowKelas = mysqli_fetch_array($dataKelas)) {
                            ?>
                                <li><a class="dropdown-item" href="control.php?ruang=<?php echo $rowKelas['nama_kelas'] ?>"><?php echo $rowKelas['nama_kelas'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>

                    </div>
                    <div class="control-nav">
                        <div class="mt-5 ctr-act control-nav-items">
                            <a class="ctr-warna-act" href="control.php?ruang=<?php echo $ruang ?>">
                                <i class="ri-temp-hot-line"></i>
                            </a>
                        </div>
                        <div class="control-nav-items">
                            <a class="ctr-biasa" href="control2.php?ruang=<?php echo $ruang ?>">
                                <i class="ri-lightbulb-line"></i>
                            </a>
                        </div>
                        <div class="mt-5 control-nav-items">
                            <a class="ctr-biasa" href="control3.php?ruang=<?php echo $ruang ?>">
                                <i class="ri-door-lock-line"></i>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex suhu-control align-items-center">
                        <span>+</span>
                        <h1>24&deg;</h1>
                        <span>-</span>
                    </div>
                    <div class="d-flex">
                        <div class="dot"></div>
                        <span class="dot-text">Grafik</span>
                    </div>
                    <div id="chart-suhu">

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="toast align-items-center text-white bg-primary border-0" id="EpicToast" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 20px; right: 20px;">
        <div class="d-flex">
            <div class="toast-body" id="toastText">

            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

    <div class="nav-bawah">
        <a class="mr-10 abu-nav" href="index.php">
            <i class="ri-dashboard-fill"></i>
        </a>
        <a class="mr-10 nav-act" href="control.php?ruang=SIJA">
            <i class="ri-sound-module-line biru"></i>
        </a>
        <a class="mr-10 badge-gradien-biru-2" href="../logout.php">
            <i class="fas fa-sign-out-alt"></i>
        </a>
        <a class="mr-10 abu-nav" href="monitoring.php">
            <i class="ri-open-arm-line"></i>
        </a>
        <a class="mr-10 abu-nav" href="setting.php">
            <i class="ri-settings-4-line"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var options = {
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }],
            fill: {
                colors: ['#8EE5F1']
            },
            chart: {
                height: 220,
                type: 'area',
                foreColor: "#C7C7C7",
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 180,
                        toolbar: {
                            show: false,
                        },
                    },

                },
            }],
            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart-suhu"), options);
        chart.render();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        function lampu(a, b) {
            $.ajax({
                url: "serverFile/control.php",
                type: "POST",
                data: {
                    kelas: String(b),
                    lampu: a,
                },
                success: function(response) {
                    Toasty(response);
                },
                error: function() {
                    alert("error");
                }

            });

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <script>
        var option = {
            animation: true,
            delay: 2000
        };
        var toastText = document.getElementById('toastText');

        function Toasty(a) {
            var toastHTMLElement = document.getElementById('EpicToast');
            toastText.innerHTML = a;
            var toastElement = new bootstrap.Toast(toastHTMLElement, option);

            toastElement.show();
        }
    </script>

</body>

</html>