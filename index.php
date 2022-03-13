<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content="Smart Class By HSTKI 2021">
  <meta name="description" content="Smart Class Himpunan Siswa Teknik Komputer Informatika">
  <meta name="keywords" content="smart class">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Indonesia">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="assets/img/fav.png" sizes="16x16" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
  <title>Hompage || Smart Class || HSTKI</title>
</head>

<body>
  <div class="body-wrapper">

    <!-- Navbar -->
    <div class="header-inner">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img class="image-logo" src="assets/img/logo/img-logo.png" alt=""></a>
          <a class="navbar-brand" href="index.php"><img class="image-logo2" src="assets/img/logo1.png" alt=""></a>
          <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-1">
              <li class="nav-item">
                <a class="menu-custom" href="#">Menu</a>
              </li>
              <li class="nav-item">
                <a class="menu-custom" href="#produk">Produk Kami</a>
              </li>
              <li class="nav-item">
                <a class="menu-custom" href="#tentang">Tentang</a>
              </li>
            </ul>
          </div>
          <div class="res-button1">
            <a href="login.php"><button type="button" class="button1 custom-button1">Mulai Sekarang</button></a>
          </div>
        </div>
      </nav>
    </div>

    <!-- Jumbotron -->
    <div class="container jumbotron">
      <div class="row">
        <div class="col-md-7">
          <h1 class="heading1-custom" style=" width: 80%;">Buat Sekolahmu Praktis Bersama Kami</h1>
          <h4 class="heading4">Di Smart Class</h4>
          <form action="">
            <input class="input-email" size="20" type="email" name="email" placeholder="Masukkan Email">
            <button type="submit" class="button2"><span>Daftar</span></button>
          </form>
        </div>
        <div class=" col-md-5">
          <img class="img-fluid img-jumbotron" src="assets/img/ilustrasion1.png">
        </div>
      </div>

      <!-- Info Panel -->
      <div class="container panel">
        <div class="info-panel">
          <div class="container-img">
            <div class="kolom">
              <img class="image-panel" src="assets/img/Medium/img-lampu2-254x203.jpg" alt="">
              <h4 class="heading-panel">Lampu Pintar</h4>
              <i class="fas fa-circle fa-xs"></i>
              <i class="fas fa-circle fa-xs"></i>
              <i class="fas fa-circle fa-xs"></i>
            </div>
            <div class="kolom">
              <img class="image-panel" src="assets/img/Medium/img-pintu2-254x203.jpg" alt="">
              <h4 class="heading-panel">Pintu Pintar</h4>
              <i class="fas fa-circle fa-xs"></i>
              <i class="fas fa-circle fa-xs"></i>
              <i class="fas fa-circle fa-xs"></i>
            </div>
            <div class="kolom">
              <img class="image-panel res-suhu" src="assets/img/Medium/img-suhu2-254x203.jpg" alt="">
              <h4 class="heading-panel res-heading-panel">Pendeteksi Suhu</h4>
              <i class="fas res-fas fa-circle fa-xs"></i>
              <i class="fas res-fas fa-circle fa-xs"></i>
              <i class="fas res-fas fa-circle fa-xs"></i>
            </div>
            <div class="kolom2">
              <h4 class="heading-panel2">Follow Kami di sini</h4>
              <div class="sosmed-panel">
                <a href=""><img class="img-fluid icon-img-panel" src="assets/Icon/icon-fb-32x32.png" alt=""></a>
                <a href=""><img class="img-fluid icon-img-panel" src="assets/Icon/icon-ig-32x32.png" alt=""></a>
                <a href=""><img class="img-fluid icon-img-panel" src="assets/Icon/icon-yt-32-32.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="slider" id="produk">
        <div class="container produk">
          <h1 class="heading1 res-heading1">Produk Kami</h1>
          <div class="slider-wrapper flex">
            <div class="slide flex flex-custom">
              <div class="slide-image slider-link prev"><img src="assets/img/large/img-lampu-636x734.png">
                <div class="overlay"></div>
              </div>
              <div class="slide-content">
                <h1 class="heading1 heading1-produk">Lampu Pintar</h1>
                <p class="desc">Dengan Lampu Pintar kita tidak perlu mematikan lampu satu-persatu di setiap ruangan. Lampu smart LED ini dapat dikontrol dari manapun menggunakan aplikasi yang mudah.</p>
                <div class="container-img-produk">
                  <img src="assets/img/Small/img- infoguru3-184x149.jpg" alt="">
                  <img src="assets/img/Small/img-pintu3-184x 149.jpg" alt="">
                  <img src="assets/img/Small/img-suhu3-184x149.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide flex flex-custom">
              <div class="slide-image slider-link prev"><img src="assets/img/large/img-infoguru-636x734.png">
                <div class="overlay"></div>
              </div>
              <div class="slide-content">
                <h1 class="heading1 heading1-produk">Info Guru</h1>
                <p class="desc">Info Guru memudahkan kita dalam mencari informasi mengenai guru, jadwal guru mengajar dan ruangan di mana guru itu mengajar.</p>
                <div class="container-img-produk">
                  <img src="assets/img/Small/img-pintu3-184x 149.jpg" alt="">
                  <img src="assets/img/Small/img-suhu3-184x149.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide flex flex-custom">
              <div class="slide-image slider-link prev"><img src="assets/img/large/img-pintu-636x734.png">
                <div class="overlay"></div>
              </div>
              <div class="slide-content">
                <h1 class="heading1 heading1-produk">Pintu Pintar</h1>
                <p class="desc">Dengan pintu pintar anda akan lebih mudah dan praktis untuk masuk ke ruangan, cukup tap-kan kartu anda ke pintu dan otomatis akan terbuka dan data anda akan tersimpan. </p>
                <div class="container-img-produk">
                  <img src="assets/img/Small/img-suhu3-184x149.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="slide flex flex-custom">
              <div class="slide-image slider-link prev"><img src="assets/img/large/img-suhu-636x734.png">
                <div class="overlay"></div>
              </div>
              <div class="slide-content">
                <h1 class="heading1 heading1-produk">Pendeteksi Suhu</h1>
                <p class="desc">Dengan alat ini kita dapat mengetahui suhu dalam ruangan serta dapat mengatur suhu dalam ruangan tersebut, sehingga kestabilan suhu dalam ruangan terjaga.</p>
                <div class="container-img-produk">
                  <img class="custom-img-produk" src="assets/img/Small/img-suhu3-184x149.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="arrows">
            <a href="#" title="Previous" class="arrow slider-link prev"><img src="assets/Icon/icon-arrow-lb-line.png" alt=""></a>
            <a href="#" title="Next" class="arrow slider-link next"><img src="assets/Icon/icon-arrow-rb-line.png" alt=""></a>
          </div>
        </div>
      </section>

      <!-- Akses -->
      <section id="tentang">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <h1 class="heading1 heading1-akses text-center">Akses di mana saja bersama Smart Class</h1>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10">
                <img class="img-fluid img-mockup" src="assets/img/large/img- moceup-1202x705.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Get Started -->
      <div class=" container text-center mt-5">
        <a href="login.php"><button type="button" class="button1 button-custom-get"><span>Mulai Sekarang</span></button></a>
      </div>

      <!-- Footer -->
      <footer class="navbar navbar-expand-lg navbar-light">
        <div class="container res-footer mt-3 mb-3">
          <a class="navbar-brand" href="index.php"><img class="image-logo" src="assets/img/logo/img-logo.png" alt=""></a>
          <div class="right">
            <a href=""><img class="icon-img-panel-custom" src="assets/Icon/icon-fb-32x32.png" alt=""></a>
            <a href=""><img class="icon-img-panel-custom" src="assets/Icon/icon-ig-32x32.png" alt=""></a>
            <a href=""><img class="icon-img-panel-custom" src="assets/Icon/icon-yt-32-32.png" alt=""></a>
          </div>
        </div>
      </footer>
    </div>


    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript">
      $(function() {
        var navbar = $('.header-inner');
        $(window).scroll(function() {
          if ($(window).scrollTop() <= 40) {
            navbar.removeClass('navbar-scroll');
          } else {
            navbar.addClass('navbar-scroll');
          }
        });
      });
    </script>
</body>

</html>