<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Boyet's Personal Website</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/b.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Quicksand:wght@300;400;500;600;700&family=Domine:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/b.png" alt="">   
        <h1 class="sitename">DEDAL</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>
<style>
@media (max-width: 480px) {
    .image-container {
        height: 10px; /* Mas mataas para makita ang subject */
    }
    
    .responsive-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 10% center; /* Adjust para ma-center ang subject */
    }
    #container-name{
      margin-top:-110px;
    }
    #container-name p{
      margin-top:40px;
    }
}

@media (max-width: 542px) {
    .image-container {
        height: 10px; /* Mas mataas para makita ang subject */
    }
    
    .responsive-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 10% center; /* Adjust para ma-center ang subject */
    }
    #container-name{
      margin-top:-110px;
    }
    #container-name p{
      margin-top:40px;
    }
}


</style>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

    <div class="image-container">
      <img src="assets/img/picboyet.JPG" alt="Profile Image" class="responsive-img" data-aos="fade-in">
    </div>



      <div class="container text-center" id="container-name" data-aos="fade-up" data-aos-delay="100">
        <h2>Boyet A. Dedal</h2>
        <p>I'm a Junior Developer from Hindang, Leyte, passionate about building creative and functional digital solutions.</p>
        <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">About me</span>
        <h2>About Me</h2>
        <p>A dedicated Information Technology student with hands-on experience in developing systems such as a Student Profile Registration System, Voting System, and ID Maker System. Passionate about software development, problem-solving, and continuously learning new technologies to improve my skills.</p>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/boy.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Information Technology Student & Aspiring Developer</h2>
            <p class="fst-italic py-3">
              A passionate IT student with hands-on experience in system development. I have built projects such as a Student Profile Registration System, a Voting System, and an ID Maker System. Constantly eager to learn and improve my skills in software and web development.
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>8 December 2003</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>yax.webactivities.online</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>0930 799 1575</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Hindang, Leyte</span></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>boyetdedal8@gmail.com</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                    </ul>
                </div>
            </div>
            <p class="py-3">
              I am committed to honing my programming and development skills to build efficient and user-friendly applications. My goal is to create innovative solutions that solve real-world problems.
            </p>
        </div>
        
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">My Resume</span>
        <h2>My Resume</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Sumary</h3>

            <div class="resume-item pb-0">
              <h4>Boyet A. Dedal</h4>
              <p><em>A passionate and dedicated Information Technology student with hands-on experience in developing various systems, including a Student Profile Registration System, Voting System, and ID Maker System. Eager to apply technical skills in real-world projects and continuously improve in the field of web and software development.</em></p>
              <ul>
                <li>Hindang, Leyte, Philippines</li>
                <li>0930 799 1575</li>
                <li>boyetdedal8@gmail.com</li>
              </ul>
            </div><!-- Edn Resume Item -->

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Primary</h4>
              <h5>2006 - 2007</h5>
              <p><em>Baldoza Elementary School Hindang, Leyte</em></p>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Secondary</h4>
              <h5>2017 - 2018</h5>
              <p><em>Junior High School</em></p>
              <ul>
                <li>Hindang National High School</li>
              </ul>
              <p><em>Senior High School</em></p>
              <ul>
                <li>Hindang Stand Alone Senior High School</li>
              </ul>
            </div><!-- Edn Resume Item -->
            <div class="resume-item">
              <h4>Tertiary</h4>
              <h5>2021 - 2025</h5>
              <p><em>Bachelor of Science in Information Technology</em></p>
              <ul>
                <li>Brgy. Atabay, Hilongos, Leyte</li>
              </ul>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Work Experience</h3>
            <div class="resume-item">
              <h4>Personal Projects</h4>
              <h5>2021 - Present</h5>
              <p><em>Independent Projects</em></p>
              <ul>
                  <li>Developed a **Student Profile Registration System** during my first year.</li>
                  <li>Created a **Voting System** as a project in my second year.</li>
                  <li>Built an **ID Maker System** in my third year, with my instructor as the client.</li>
              </ul>
            </div>
            <h3 class="resume-title">Skills</h3>
            <div class="resume-item">
              <ul>
                  <li>Proficiency in HTML,CSS and JavaScript</li>
                  <li>Experience with Responsive web design</li>
                  <li>Hardworking</li>
                  <li>Time Management</li>
              </ul>
            </div>
            </div><!-- Edn Resume Item -->
          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

      <!-- Services Section -->
      <section id="services" class="services section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <span class="description-title">My Services</span>
  <h2>My Services</h2>
  <p>I offer web development, video editing, graphic design, and photo editing to create high-quality digital solutions.</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

  <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
  <div class="service-item position-relative">
    <div class="icon"><i class="bi bi-code-slash icon"></i></div>
    <h4><a href="#" class="stretched-link">Web Development</a></h4>
    <p>I create websites that are fast, responsive, and easy to use.</p>
  </div>
</div><!-- End Service Item -->

<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
  <div class="service-item position-relative">
    <div class="icon"><i class="bi bi-camera-reels icon"></i></div>
    <h4><a href="#" class="stretched-link">Video Editing</a></h4>
    <p>I edit videos to make them smooth, engaging, and professional-looking.</p>
  </div>
</div><!-- End Service Item -->

<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
  <div class="service-item position-relative">
    <div class="icon"><i class="bi bi-brush icon"></i></div>
    <h4><a href="#" class="stretched-link">Graphic Design</a></h4>
    <p>I design logos, posters, and social media graphics that stand out.</p>
  </div>
</div><!-- End Service Item -->


<div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
  <div class="service-item position-relative">
    <div class="icon"><i class="bi bi-image icon"></i></div>
    <h4><a href="#" class="stretched-link">Photo Editing</a></h4>
    <p>I enhance and retouch photos to make them more vibrant and professional.</p>
  </div>
</div><!-- End Service Item -->

  </div>

</div>

</section><!-- /Services Section -->
  

    <!-- Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Portfolio</span>
        <h2>Portfolio</h2>
        <p>Welcome to my portfolio! Here, you'll find a collection of my projects showcasing my skills, creativity, and dedication to excellence. From web development to innovative solutions, each project reflects my passion for technology and problem-solving.</p>
      </div><!-- End Section Title -->

      <div class="container-fluid">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
          
          </ul><!-- End Portfolio Filters -->

          <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/one.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/one.png" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://stdprofile.webactivities.online/index.php?/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/votingimg.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <a href="assets/img/votingimg.png" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://voting.webactivities.online/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

         

          

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


  

  
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Contact</span>
        <h2>Contact</h2>
        <p>If you have any questions about programming, software development, or system projects, feel free to reach out. I'm always open to learning, collaborating, and discussing new tech ideas.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Hindang, Leyte, Philippines</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>0930 799 1575</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>boyetdedal8@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>


   <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
       
        <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </div>
    </form>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">
    <div class="container">
      <h3 class="sitename">Boyet A. Dedal<br></h3>
      <p>Aspiring IT professional with a passion for programming and system development. Dedicated to building efficient, user-friendly applications and continuously improving my skills in software and web development.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Yax</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by Yax</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>