<!DOCTYPE html>
<html lang="en">
<?php
include './config/database.php';
include('./config/fieldvalues.php');
$base_url = url();
echo "<script>var base_url = '$base_url';</script>";

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $fieldvalues["title"] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="<?= $base_url ?>assets/vendor/jquery/jquery.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <h1><a href="index.php"><?= $fieldvalues["title"] ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#hero">Home</a></li>
          <li><a class="nav-link" href="<?= $base_url ?>about.php">About Me</a></li>
          <li>
            <a class="nav-link" href="<?= $base_url ?>achievements.php">Achievements</a>
          </li>
          <li>
            <a class="nav-link" href="<?= $base_url ?>news.php">News</a>
          </li>
          <li><a class="nav-link" href="<?= $base_url ?>gallery.php">Gallery</a></li>
          <li><a class="nav-link" href="<?= $base_url ?>contact.php">Contact Me</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-6 footer-info">
            <h3>
              <?php
              if (isset($fieldvalues["title"])) {
                echo $fieldvalues["title"];
              }
              ?>
            </h3>
            <p>
              <?php
              if (isset($fieldvalues["address"])) {
                echo "<address id='address'>" . $fieldvalues["address"] . "</address>";
              }
              if (isset($fieldvalues["phone1"]))
                echo "<strong>Phone:</strong> <a id='phone1' class='text-white' href='mailto:" . $fieldvalues["phone1"] . "'>" . $fieldvalues["phone1"] . "</a>";
              if (isset($fieldvalues["phone2"]))
                echo " / <a id='phone2' href='mailto:" . $fieldvalues["phone2"] . "'>" . $fieldvalues["phone2"] . "</a>";

              if (isset($fieldvalues["email1"]))
                echo "<br/> <strong>Email:</strong> <a id='email1' class='text-white' href='mailto:" . $fieldvalues["email1"] . "'>" . $fieldvalues["email1"] . "</a>";
              if (isset($fieldvalues["email2"]))
                echo " / <a id='email2' href='mailto:" . $fieldvalues["email2"] . "'>" . $fieldvalues["email2"] . "</a>";
              ?>
              <br>
              <!-- <strong>Phone:</strong> +1 5589 55488 55<br /> -->
              <!-- <strong>Email:</strong> info@example.com<br /> -->
            </p>
            <div class="social-links mt-3">
              <?php
              if (isset($fieldvalues["facebook"]) && $fieldvalues["facebook"] != "")
                echo "<a href='" . $fieldvalues["facebook"] . "' id='facebook'  target='__blank'><i class='bx bxl-facebook'></i></a>";
              if (isset($fieldvalues["twitter"]) && $fieldvalues["twitter"] != "")
                echo "<a href='" . $fieldvalues["twitter"] . "' id='twitter'  target='__blank'><i class='bx bxl-twitter'></i></a>";
              if (isset($fieldvalues["instagram"]) && $fieldvalues["instagram"] != "")
                echo "<a href='" . $fieldvalues["instagram"] . "' id='instagram'  target='__blank'><i class='bx bxl-instagram'></i></a>";
              if (isset($fieldvalues["linkedin"]) && $fieldvalues["linkedin"] != "")
                echo "<a href='" . $fieldvalues["linkedin"] . "' id='linkedin'  target='__blank'><i class='bx bxl-linkedin'></i></a>";
              if (isset($fieldvalues["youtube"]) && $fieldvalues["youtube"] != "")
                echo "<a href='" . $fieldvalues["youtube"] . "' id='youtube'  target='__blank'><i class='bx bxl-youtube'></i></a>";
              ?>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="#hero">Home</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="<?= $base_url ?>about.php">About us</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="<?= $base_url ?>achievements.php">Achievements</a>
              </li>
              <li>
                <i class="bx bx-chevron-right"></i> <a href="<?= $base_url ?>news.php">News</a>
              </li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= $base_url ?>gallery.php">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= $base_url ?>contact.php">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?= $fieldvalues['title'] ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
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