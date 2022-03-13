<?php
session_start();
include "../koneksi.php";
include('cek-login.php');
$select = mysqli_query($koneksi, "SELECT * FROM data_guru 
INNER JOIN data_kelas ON data_kelas.id_guru = data_guru.id_guru");
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
  <title>Monitoring || Smart Class || HSTKI</title>
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
        <a href="monitoring.php" class="">
          <li class="active-menu"><i class="far fa-chart-bar biru"></i>&ensp; Monitoring</li>
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
        <div class="d-flex">
          <div class="welcome-text">
            <h6 class="selamat-datang">Selamat Datang di,</h6>
            <h3 class="selamat-nama" class="mb-2" style="color:#5E5E73; font-weight:800;">Monitoring</h3>
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
            <span class="dot-text">Info Guru</span>
          </div>
          <div class="card-scroll-guru">
            <table class="table guru-info">
              <thead>
                <tr>
                  <th class="text-moni" scope="col">Guru</th>
                  <th class="text-moni" scope="col">Mapel</th>
                  <th class="text-moni" scope="col">Waktu</th>
                  <th class="text-moni" scope="col">Ruang</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($fetch = mysqli_fetch_array($select)) {
                  echo "
                    <tr>
                    <td class='d-flex align-items-center'>
                      <img src='assets/img/guru-default.png' alt='guru'>
                      <span>&emsp;$fetch[nama_guru]</span>
                    </td>
                    <td class='align-middle'>$fetch[mapel]</td>
                    <td class='align-middle'>$fetch[waktu]</td>
                    <td class='align-middle'>$fetch[nama_kelas]</td>
                  </tr>
                  ";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-moni-kedua">
          <div class="d-flex mb-4">
            <div class="dot"></div>
            <span class="dot-text">Aktivitas Terakhir</span>
          </div>
          <div class="card-scroll-aktivitas-guru">
            <table class="table guru-info">
              <!-- <thead>
    <tr>
      <th scope="col">Guru</th>
      <th scope="col">Mapel</th>
      <th scope="col">Waktu</th>
      <th scope="col">Ruang</th>
    </tr>
  </thead> -->
              <tbody>
                <tr>
                  <td class="d-flex align-items-center">
                    <img src="assets/img/guru-default.png" alt="guru">
                    <span>&emsp;Doni</span>
                  </td>
                  <td class="align-middle">Matematika</td>
                  <td class="align-middle">Telah keluar dari NA</td>
                  <td class="align-middle"><i class="ri-delete-bin-5-line"></i></td>
                </tr>
                <tr>
                  <td class="d-flex align-items-center">
                    <img src="assets/img/guru-default.png" alt="guru">
                    <span>&emsp;Doni</span>
                  </td>
                  <td class="align-middle">Matematika</td>
                  <td class="align-middle">Telah keluar dari TS1</td>
                  <td class="align-middle"><i class="ri-delete-bin-5-line"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
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
        <a class="mr-10 nav-act" href="monitoring.php">
          <i class="ri-open-arm-line biru"></i>
        </a>
        <a class="mr-10 abu-nav" href="setting.php">
          <i class="ri-settings-4-line"></i>
        </a>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>