<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Libreria Universal</title>
  <meta content="Pagina web donde se muestras libros y autos de todas nacionalidades" name="description">
  <meta content="libros, librerias, autores, libro, autor, gratis" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/libros.png" rel="icon">
  <link href="assets/img/libros.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bethany
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>

  <?php
  include("books.php");
  include("authors.php");
  include("contacs.php")
  ?>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>Libreria Universal</span></a></h1>

        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="#portfolio">Libros</a></li>
            <li><a class="nav-link scrollto" href="#team">Autores</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
            <li><a class="getstarted scrollto" href="#about">Inicio</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
      <!-- End Header Container -->
    </div>
  </header>
  <!-- End Header -->



  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>Desata tu imaginación, abre las páginas del universo literario.</h2>
            <h3>Galeria de exposición de libros como de autores de manera gratis.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Bienvenido a Librería Universal, tu destino literario definitivo. Nuestra página web es el lugar ideal para aquellos que buscan sumergirse en un maravilloso mundo de libros y autores. Aquí, encontrarás una extensa colección de obras literarias que abarcan desde los clásicos intemporales hasta las últimas novedades del mundo editorial.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Colección de todo tipo de libros</li>
              <li><i class="ri-check-double-line"></i> Exposición de todos los autores de tus libros favoritos</li>

            </ul>

          </div>
        </div>

      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
      </div>
    </section>


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">


          <h2>Libros</h2>
          <p>Galeria con todos los libros que tenemos disponibles, los cuales tenemos de una gran variedad de categorias y tipos</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php
          $conBooks = new Books();
          $books = $conBooks->getBooks();
          foreach ($books as $book) :
          ?>

            <div class="portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?php echo $book['imagen'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $book['titulo'] ?></h4>
                  <p><?php echo $book['autor'] ?></p>
                  <div class="portfolio-links">
                    <a href="<?php echo $book['imagen'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $book['descripcion'] ?> <br><br> <b>Categorias: </b><?php echo $book['categoria'] ?> "><i class="bx bx-plus"></i></a>
                    <a href="<?php echo $book['link'] ?>" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Cta Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div>
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Autores</h2>
              <p>Listado de autores de numerosos libros.</p>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">

              <?php
              $conAuthors = new Authors();
              $authors = $conAuthors->getAuthors();
              foreach ($authors as $author) :
              ?>
                <div class="col-lg-6">
                  <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="<?php echo $author['imagen'] ?>" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4><?php echo $author['nombre'] . " " . $author['apellido'] ?></h4>
                      <span><?php echo $author['pais'] ?></span>
                      <p><?php echo $author['libros'] ?> </p>

                    </div>
                  </div>
                </div>

              <?php endforeach; ?>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="counts" class="counts">
      <div class="container">
      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contacto</h2>
              <p>Si tienes alguna pregunta sobre nuestro catálogo de libros, necesitas asistencia para encontrar un título específico o simplemente deseas compartir tus comentarios, ¡estamos aquí para ayudarte! Nuestro equipo de atención al cliente altamente capacitado está listo para responder a tus inquietudes y brindarte la mejor experiencia posible.</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">

            <form action="form.php" method="post" role="form" class="php-email-form mt-4">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="20" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading" style="color: white;"></div>
                <div class="error-message" style="color: white;"></div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Libreria Universal</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://github.com/Omar-Abel/Web_Library">Omar Lora</a>
        </div>
      </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>