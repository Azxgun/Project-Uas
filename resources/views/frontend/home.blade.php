<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>kalenderku</title>
<!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
    <!-- Additional CSS Files -->
   <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fullpage.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


    </head>

    <body>

    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
  <style>
   /* ===== GLOBAL RESET & BODY ===== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(135deg, #2a5298, #1e3c72);
  color: white;
  min-height: 100vh;
  overflow-x: hidden;
}

/* ===== NAVBAR ===== */
.modern-navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 50px;
  position: absolute;
  width: 100%;
  top: 0;
  z-index: 1000;
  background: transparent;
}
.modern-navbar .logo {
  font-size: 24px;
  font-weight: bold;
  color: white;
  text-decoration: none;
}
.modern-navbar .nav-links {
  list-style: none;
  display: flex;
  gap: 30px;
}
.modern-navbar .nav-links li a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
}
.modern-navbar .nav-links li a:hover {
  color: #00e5ff;
}

/* ===== HERO SECTION ===== */
.hero-content {
  text-align: center;
  padding: 140px 20px 60px;
  max-width: 800px;
  margin: 0 auto;
}
.hero-content .subtitle {
  font-size: 1.5em;
  font-weight: 400;
  color: rgba(255, 255, 255, 0.9);
  margin-bottom: 10px;
}
.hero-content h1 {
  font-size: 3.5em;
  font-weight: 700;
  margin-bottom: 20px;
  text-shadow: 0 0 15px rgba(0, 198, 255, 0.5);
}
.hero-content p {
  font-size: 1.2em;
  line-height: 1.6;
  margin-bottom: 30px;
}

/* ===== TOMBOL TRANSPARAN ELEGAN ===== */
.button-container {
  display: flex;
  gap: 20px;
  justify-content: center;
  margin-top: 40px;
}
.btn-custom {
  padding: 12px 24px;
  border: 2px solid rgba(255, 255, 255, 0.5);
  background: transparent;
  border-radius: 8px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  text-decoration: none;
  transition: all 0.3s ease;
  color: white;
  backdrop-filter: blur(4px);
}
.btn-custom:hover {
  background: white;
  color: #1e3c72;
  border-color: white;
}
.btn-custom:focus {
  outline: none;
  box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.4);
}
.btn-custom:active {
  transform: scale(0.98);
}

/* ===== CONTACT SECTION ===== */
.contact-section {
  display: flex;
  flex-direction: column;
  gap: 30px;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
  backdrop-filter: blur(10px);
  color: white;
}
.contact-box {
  padding: 20px;
  border-radius: 15px;
  background: rgba(255, 255, 255, 0.05);
  box-shadow: inset 0 0 8px rgba(255, 255, 255, 0.05);
}
.contact-box .contact-row {
  margin-bottom: 20px;
  font-size: 15px;
  display: flex;
  align-items: center;
}
.contact-box .contact-row i {
  margin-right: 12px;
  font-size: 18px;
  color: #00e5ff;
}

/* ===== FORM ===== */
form#ajax-contact {
  background: rgba(255, 255, 255, 0.03);
  padding: 25px;
  border-radius: 16px;
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}
.input-field {
  margin-bottom: 20px;
}
.input-field input,
.input-field textarea {
  width: 100%;
  padding: 14px 16px;
  border: none;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.08);
  color: white;
  font-size: 15px;
  box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(5px);
  transition: all 0.3s ease;
}
.input-field input:focus,
.input-field textarea:focus {
  outline: none;
  background: rgba(255, 255, 255, 0.15);
  box-shadow: inset 0 0 0 2px #00e5ff;
}
.input-field input::placeholder,
.input-field textarea::placeholder {
  color: rgba(255, 255, 255, 0.5);
}
form#ajax-contact .btn {
  display: inline-block;
  background: #00e5ff;
  border: none;
  color: black;
  font-weight: bold;
  padding: 12px 26px;
  border-radius: 10px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
  width: 100%;
  text-align: center;
}
form#ajax-contact .btn:hover {
  background: #00bcd4;
  color: white;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .modern-navbar {
    flex-direction: column;
    gap: 10px;
  }
  .button-container {
    flex-direction: column;
    gap: 15px;
  }
  .btn-custom {
    width: 100%;
    padding: 14px 0;
  }
  .hero-content h1 {
    font-size: 2.2em;
  }
  .hero-content p {
    font-size: 1em;
  }
}


  </style>

  <div class="container-fluid">
    <nav class="modern-navbar">
      <a href="#slide01" class="logo">KALENDERKU</a>
      <ul class="nav-links">
        <li><a href="#slide01">Home</a></li>
        <li><a href="#slide02">Features</a></li>
        <li><a href="#slide03">Our Team</a></li>
        <li><a href="#slide04">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>


       <video autoplay muted loop id="bg-video">
  <source src="{{ asset('assets/images/video-bg.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>

        <div id="fullpage" class="fullpage-default">

            <div class="section animated-row" data-section="slide01">
                <div class="section-inner">
                    <div class="welcome-box">
                        <span class="welcome-first animate" data-animate="fadeInUp">Hello, SELAMAT DATANG DI  </span>
                        <h1 class="welcome-title animate" data-animate="fadeInUp">kalenderku</h1>
                        <p class="animate" data-animate="fadeInUp">Kelola agenda, tugas, dan target harianmu dengan mudah.
Aplikasi kalender ini dirancang untuk membantu kamu lebih produktif, terorganisir, dan terhubung dalam satu platform.</p>
<div class="mt-4">
              <a href="{{ url('/login') }}" class="btn btn-custom btn-masuk">Masuk</a>
<a href="{{ url('/register') }}" class="btn btn-custom btn-daftar">Daftar</a>

            </div>
                      

                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-contentbox">
                                            <div class="animate" data-animate="fadeInUp">
                                                <span>Feutures</span>
                                                <h2>kalenderku</h2>
                                                <p><strong>Kalenderku </strong> adalah aplikasi kalender digital yang dirancang khusus untuk membantu mahasiswa dalam mengelola jadwal kuliah, tugas, ujian, dan kegiatan organisasi.
Dengan antarmuka yang intuitif dan fitur-fitur pintar seperti pengingat otomatis dan manajemen tugas, mahasiswa dapat lebih produktif, tidak melewatkan deadline, dan menjaga keseimbangan antara akademik dan kehidupan pribadi.</p>
                                            </div>

                                            <div class="facts-list owl-carousel">
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-th-large counter-icon" aria-hidden="true"></i><span class="count-number"></span> Dashboard Dinamis
                                                    </div>
                                                </div>
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-book counter-icon" aria-hidden="true"></i><span class="count-number"></span> Manajemen Mata Kuliah
                                                    </div>
                                                </div>
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-desktop counter-icon" aria-hidden="true"></i><span class="count-number"></span> Kalender Interaktif
                                                    </div>
                                                </div>
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-support counter-icon" aria-hidden="true"></i><span class="count-number"></span> Manajemen Event
                                                    </div>
                                                </div>
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="counter-box">
                                                        <i class="fa fa-certificate counter-icon" aria-hidden="true"></i><span class="count-number"></span> Notifikasi Otomatis
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section animated-row" data-section="slide06">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Our Team</span>
                                <h2>Kelompok 1</h2>
                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                               <img src="{{ asset('assets/images/item-1.jpg') }}" alt="">

                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Ammar Falah Gunawan</h4>
                                                <p>PROJECT MANAGER</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                               <img src="{{ asset('assets/images/item-2.jpg') }}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Fakhri Rimbawan</h4>
                                                <p>FRONT END DEVELOPER</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/item-3.jpg') }}" alt="">

                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>MUHAMMAD BAYU</h4>
                                                <p>BACK END DEVELOPER</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                               <img src="{{ asset('assets/images/item-4.jpg') }}" alt="">

                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Fara Nabila</h4>
                                                <p>DOCUMENTATION & WEB DESIGNER</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                               <img src="{{ asset('assets/images/item-5.jpg') }}" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Aprilia Salsabila</h4>
                                                <p>DOCUMENTATION & WEB DESIGNER.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide07">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Contact</span>
                                <h2>Get In Touch!</h2>
                            </div>
                            <div class="contact-section">
                                <div class="row">
                                    <div class="col-md-6 animate" data-animate="fadeInUp">

                                    </div>
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <form id="ajax-contact" method="post" action="#">
                                            <div class="input-field">
                                                <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
                                            </div>
                                            <div class="input-field">
                                                <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                                            </div>
                                            <button class="btn" type="submit">Submit</button>
                                        </form>
                                        <div id="form-messages" class="mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fullpage.min.js') }}"></script>
<script src="{{ asset('assets/js/scrolloverflow.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.inview.min.js') }}"></script>
<script src="{{ asset('assets/js/form.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>



  </body>
</html>
