<?php
session_start();
include "../koneksi.php";
include('cek-login.php');
$data_riwayat = mysqli_query($koneksi, "SELECT * FROM riwayat ORDER BY id DESC LIMIT 10 ");
$select = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$_SESSION[siswa]'");
while ($fetch = mysqli_fetch_array($select)) {

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

        <link rel="stylesheet" href="../admin/assets/css/style.css">
        <link rel="stylesheet" href="../admin/assets/css/resvonsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="icon" href="../assets/img/fav.png" sizes="16x16" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d8ab9fc50e.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

        <title>Dashboard || Smart Class || HSTKI</title>
    </head>

    <body>
        <div class=" bg-1-body">
            <div class="flex-custom">
                <div class="side-menu mt-4 mb-4">
                    <img src="assets/img/logo.png" alt="logo" class="mb-5">
                    <a href="index.php" class="putih">
                        <li class="active-menu"><i class="ri-dashboard-fill biru"></i>&ensp; Dashboard</li>
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
                <div class="main-side mt-4">
                    <h6 class="selamat-datang" style="color: #5E5E73;">Selamat Datang</h6>
                    <h3 class="selamat-nama" class="mb-2" style="color:#5E5E73; font-weight:800;"><?php echo "$fetch[fullname]"; ?></h3>
                    <div class="card-tengah bg-biru-muda">
                        <div class="d-flex">
                            <div style="max-width: 70%;" class="text-wrapper">
                                <h2 style="color:#FFFFFF; font-weight :700;">BELAJAR LEBIH MUDAH</h2>
                                <p style="color: #FFFFFF;">Bersama Kami di <span>Smart Class</span></p>
                                <button class="btn-custom-tengah">Lihat Selengkapnya &ensp;<i class="fas fa-play fa-xs"></i></button>
                            </div>
                            <div class="img-wrapper">
                                <img src="assets/img/card-tengah.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="card-tengah-2 mr-2">
                            <div class="d-flex">
                                <div class="dot"></div>
                                <span class="dot-text">Total kelas aktif</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="angka-wrapper">
                                    <div class="d-flex chart-g">
                                        <h2 class="mt-2">53&thinsp;</h2>
                                        <span class="orang-angka">Kelas</span>
                                    </div>
                                    <p class="des-angka-hijau"><i class="ri-arrow-right-up-line"></i>&ensp;12 Kelas dari hari lalu</p>
                                </div>
                                <div id="chart-kelas">
                                </div>
                            </div>
                        </div>
                        <div class="card-tengah-2">
                            <div class="d-flex">
                                <div class="dot"></div>
                                <span class="dot-text">Guru aktif</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="angka-wrapper">
                                    <div class="d-flex chart-g">
                                        <h2 class="mt-2">53&thinsp;</h2>
                                        <span class="orang-angka">Orang</span>
                                    </div>
                                    <p class="des-angka-merah"><i class="ri-arrow-right-down-line"></i>&ensp;12 Orang dari hari lalu</p>
                                </div>
                                <div id="chart-guru">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-tengah-s bg-putih">
                        <div class="d-flex">
                            <div class="dot"></div>
                            <span class="dot-text">Suhu Ruangan</span>
                        </div>
                        <div id="chart">
                        </div>
                    </div>
                </div>
                <div class="side-right mt-4">
                    <div class="row height d-flex align-items-center">
                        <div class="col-md-8">
                            <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Search"> </div>
                        </div>
                        <div class="col-md-2 notif">
                            <i class="far fa-bell"></i>
                        </div>

                    </div>
                    <div class="card-side">
                        <div class="d-flex">
                            <div style="width: 1.2vw; border-radius:5px; margin-right: 0.6vw; height:0.8vw; background-color:#194AF1;"></div>
                            <span style="margin-top: -0.3vw; font-size: 1vw; font-weight:600;">Riwayat</span>
                        </div>
                        <div class="card-scroll-riwayat">
                            <?php
                            while ($riwayat = mysqli_fetch_array($data_riwayat)) {
                            ?>
                                <li class="d-flex side-card-items">
                                    <img src="assets/img/suhu-icon.png" alt="suhu">
                                    <div class="text-suhu">
                                        <span style="font-weight: 700; font-size:1vw;"><?php echo $riwayat['des'] ?></span>
                                        <p style="color: #C7C7C7; font-size:0.8vw;">Ruang <?php echo $riwayat['ruang'] ?></p>
                                        <p style="color: #C7C7C7; font-size:0.6vw; margin-top:-1.2vw;"><?php echo $riwayat['waktu'] ?></p>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <div class="card-side-2">
                        <div class="d-flex">
                            <div class="dot"></div>
                            <span class="dot-text">Laporan Fisik</span>
                        </div>
                        <div class="text-center mts-4 text-laporan">
                            <h5>Download Laporan Hari Ini</h5>
                            <button class="btn-custom-side mt-3"> Download PDF &ensp;<i class="fas fa-file-pdf"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

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

            chart: {
                height: 160,
                type: 'area',
                foreColor: "#C7C7C7",
            },
            responsive: [{
                breakpoint: 1000,
                options: {
                    chart: {
                        height: 120,
                    },
                },
            }],
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 150,
                        toolbar: {
                            show: false,
                        },
                    },
                    xaxis: {
                        labels: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            style: {
                                fontSize: '6px',
                            },
                        },
                    },
                },
            }],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                type: 'datetime',
                labels: {
                    style: {
                        fontSize: '12px',
                    },
                },
                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
        };

        var chart1 = new ApexCharts(document.querySelector("#chart"), options);
        chart1.render();

        var options1 = {
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 200]
            }],
            grid: {
                show: false,
            },
            colors: ["#17FFB2"],
            chart: {
                height: 150,
                type: 'area',
                foreColor: '#00ff001C',
                toolbar: {
                    show: false,
                },
            },
            responsive: [{
                breakpoint: 1000,
                options: {
                    chart: {
                        height: 125,
                    },
                },
            }],
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 100,
                    },
                    xaxis: {
                        labels: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                    },
                },
            }],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
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

        var chart2 = new ApexCharts(document.querySelector("#chart-kelas"), options1);
        chart2.render();
        var options2 = {
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 97]
            }],
            grid: {
                show: false,
            },
            colors: ['#F92034', '#00E396', '#CED4DC'],
            chart: {
                height: 150,
                type: 'area',
                foreColor: '#00ff001C',
                toolbar: {
                    show: false,
                },
            },
            responsive: [{
                breakpoint: 1000,
                options: {
                    chart: {
                        height: 125,
                    },
                },
            }],
            responsive: [{
                breakpoint: 600,
                options: {
                    chart: {
                        height: 100,
                    },
                    xaxis: {
                        labels: {
                            show: false,
                        },
                    },
                    yaxis: {
                        labels: {
                            show: false,
                        },
                    },
                },
            }],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
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

        var chart3 = new ApexCharts(document.querySelector("#chart-guru"), options2);
        chart3.render();
    </script>

    </body>

    </html>