<?php include 'sendemail.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="resources/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome -->
  <script defer src="resources/fontawesome/all.min.js"></script>
  <!-- css -->
  <link rel="stylesheet" href="resources/style/style.css">
  <!-- animasi -->
  <link rel="stylesheet" href="resources/aos/aos.css" />
  <script src="resources/aos/aos.js"></script>
  <title>ProjectGan</title>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
  <script>
    AOS.init();
  </script>
  <header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
      <a class="navbar-brand"><img src="resources/images/logo-projectgan3-2.png" width="140" alt=""></a>
      <button id="navbarButton" class="navbar-toggler shadow-none nav-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold link-item" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold link-item" href="#tentang">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold link-item" href="#tim_kami">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark font-weight-bold link-item" href="#hubungi_kami">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div id="text" data-aos="fade-right" data-aos-duration="1000">
        <h1>Build your website<br>with "project gan"</h1>
        <p>Providing good result with fair price</p>
        <a href="index.php#order_now">order now</a>
      </div>
      <div data-aos="fade-left" data-aos-duration="1000">
        <img src="resources/images/app_development_PNG.png" alt="">
      </div>
    </div>
  </header>

  <p id="tentang"></p>
  <main>
    <section id="about">
      <!-- tentang -->
      <article id="tentang" data-aos="fade-up" data-aos-duration="1000">
        <h2>Tentang ProjectGan</h2>
        <p>Project Gan terbentuk dari sekelompok mahasiswa gabut jurusan informatika Universitas Islam Indonesia. Kami
          menawarkan jasa pembuatan web dengan harga yang dapat anda atur sendiri. Hanya disini anda bisa mendapatkan
          jasa pembuatan web dengan harga sesuai keinginan anda.</p>
      </article>
      <!-- mengapa -->
      <h2 data-aos="fade-up" data-aos-duration="1000">Mengapa ProjectGan?</h2>
      <article id="mengapa">
        <!-- mengapa 1 -->
        <div data-aos="fade-up" data-aos-duration="1500">
          <img src="resources/images/Online payment _Two Color (3).png" alt="">
          <div>
            <h3>Harga Bersahabat</h3>
            <p>Dengan harga yang dijamin lebih murah dari yang lain, anda bisa mendapatkan website dengan kualitas dan
              keamanan terjamin.</p>
          </div>
        </div>
        <!-- mengapa 2 -->
        <div data-aos="fade-up" data-aos-duration="1500">
          <img id="g1" src="resources/images/Fast Working_Monochromatic (1).png" alt="">
          <div>
            <h3>Pengerjaan Cepat</h3>
            <p>Satu project dikerjakan dengan 4 developer sehingga waktu pengerjaan lebih cepat dan efisien.</p>
          </div>
          <img id="g2" src="resources/images/Fast Working_Monochromatic (1).png" alt="">
        </div>
        <!-- mengapa 3 -->
        <div data-aos="fade-up" data-aos-duration="1500">
          <img src="resources/images/Security_Isometric (2).png" alt="">
          <div>
            <h3>Keamanan Terjamin</h3>
            <p>Tentu saja dengan menggunakan ssl, anda akan lebih aman untuk menyimpan data pribadi di website anda.</p>
          </div>
        </div>
      </article>
    </section>
    <!-- aib -->
    <p id="tim_kami"></p>
    <section id="tim" class="px-4">
      <h2 data-aos="fade-up" data-aos-duration="1000">Tim Kami</h2>
      <div class="container-fluid mb-5 row">
        <!-- alip -->
        <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="500">
          <div>
            <img src="resources/images/alip.jpeg" class="rounded-circle" alt="">
            <p>Alif Maulana R.</p>
          </div>
        </div>
        <!-- udin -->
        <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="1000">
          <div>
            <img src="resources/images/fahru.jpeg" class="rounded-circle" alt="">
            <p>Fahrudin Nasikh A.</p>
          </div>
        </div>
        <!-- ilham -->
        <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="1500">
          <div>
            <img src="resources/images/ilham.jpeg" class="rounded-circle" alt="">
            <p>M. Ilham Rizkyakbar</p>
          </div>
        </div>
        <!-- naufal -->
        <div class="col-6 col-md-3" data-aos="flip-left" data-aos-duration="2000">
          <div>
            <img src="resources/images/nopal.jpg" class="rounded-circle" alt="">
            <p>Naufal Yusran</p>
          </div>
        </div>
      </div>
      <!-- jalan hidup -->
      <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000" id="tandaFormTanya">
        <p class="col-12 col-lg-6">Kami semua merupakan mahasiswa informatika dari salah satu universitas di Yogyakarta.
          Kami siap memberikan layanan terbaik kepada anda.</p>
      </div>
    </section>
    <!-- form pertanyaan -->
    <p id="hubungi_kami"></p>
    <p id="order_now"></p>
    <section class="bg-light p-5 mt-4" data-aos="fade-up" data-aos-duration="1000">
      <div class="container-fluid text-center">
        <h2>Hubungi Kami</h2>
        <h5 class="mb-4 fw-normal">Tulis Pesan</h5>
        <!-- FORM -->
        <form class="contact" action="index.php#tandaFormTanya" method="post">
          <div class="row justify-content-center mb-3">
            <div class="col-sm-10 col-md-8 col-lg-6">
              <div class="form-group text-start">
                <label for="name" class="fw-normal fs-6">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <div class="col-sm-10 col-md-8 col-lg-6">
              <div class="form-group text-start">
                <label for="email" class="fw-normal fs-6">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mb-3">
            <div class="col-sm-10 col-md-8 col-lg-6">
              <div class="form-group text-start">
                <label for="message" class="fw-normal fs-6">Pesan</label>
                <textarea class="form-control" name="message" rows="3" required></textarea>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6 mb-4">
              <input class="btn fs-6 submit-question-btn" type="submit" name="submit" value="Submit">
            </div>
            <!-- ALERT -->
            <?= $alert; ?>
            <!-- END ALERT -->
          </div>
        </form>
      </div>
    </section>
  </main>
  <!-- footer -->
  <footer class="bg-footer">
    <div class="py-5 container">
      <div class="row">
        <div class="col-sm-10 col-lg-8 col-xl-9">
          <h4>ProjectGan</h4>
          <p class="fw-normal">Jl. Kaliurang KM 12.5, Sardonoharjo, Nganglik, Sleman, D.I Yogyakarta.</p>
          <p class="fw-normal mb-0">WA/Telp: 081326768372 <br>Email: projectgan.center@gmail.com</p>
        </div>
        <div class="col-sm-10 col-lg-4 col-xl-3 mt-5 mt-lg-0">
          <h4>Contact Us</h4>
          <div id="contactUs" class="pt-2 pb-1 medsos-container">
            <a href="https://m.facebook.com/projectgan/"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
            <a href="https://api.whatsapp.com/send?phone=6281326768372"><i class="fab fa-whatsapp fa-2x text-success mx-3"></i></a>
            <a href="https://twitter.com/GanProject"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
            <a href="https://www.instagram.com/projectgan/"><i class="fab fa-instagram fa-2x text-danger mx-3"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- copyright -->
    <p id="copyright" class="py-2">Developed by ProjectGan Copyright &copy; 2021</p>
  </footer>


  <!-- bootstrap script -->
  <script src="resources/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="resources/bootstrap/jquery-3.5.1.min.js"></script>
  <script src="resources/bootstrap/jquery.bootstrap-growl.min.js"></script>
  <!-- custom script -->
  <script src="resources/js/script.js"></script>

</body>

</html>
