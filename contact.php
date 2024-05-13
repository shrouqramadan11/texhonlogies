<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "technologies";



// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_POST){
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$problem = $_POST['problem'];
$messege = $_POST['messege'];




        $sql = "INSERT INTO problems (name, email,problem,messege) VALUES ('$name', '$email','$problem','$messege')";
        if ($conn->query($sql) === TRUE) {
          echo "We will solve your problem within 24 hours.";
          header("problems.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
      }
      else{
          echo "<h3></h3>";
      }
      
      
      ?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Soume Computing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fishy.png">
  <link href="assets/img/fishy.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">

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
  <style> 
    .lo {
      width: 100px; 
      
    }

  </style>
</head>

<body>


    <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    
          <a href="Home.php" class="logo me-auto me-lg-0"><img src="assets/img/Soume_Comput-removebg-preview.png" alt="" class=" image-fluid lo"></a>
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li ><a href="Home.php" style="font-size: 20px;">Home</a></li>
              <li><a href="about.php" style="font-size: 20px;">About us</a></li>
              <li><a href="contact.php" style="font-size: 20px;">Contact us</a></li>
              <li><a class="nav-link scrollto" href="login.php" style="font-size: 20px;">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
          <a href="maintenance.php" class="book-a-table-btn scrollto d-none d-lg-flex">maintenance</a>

        </div>
      </header><!-- End Header -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact us...</p>
        </div>
      </div>

      <div data-aos="fade-up">

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Address</h4>
                <p>Minya Governorate - New Minya</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>work hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  10:00 AM - 12:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>shrouqramadan@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>call us:</h4>
                <p>01012836768</p>
                
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="problem" id="subject" placeholder="Problem" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="messege" rows="8" placeholder="Message" ></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent, thank you</div>
              </div>
              <div class="text-center"><button type="submit">Send</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
            <h3>Soume computing</h3>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Home.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login.php">Login</a></li>
            </ul>
          </div>

            </form>

          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>