<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Soume computing</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <!-- Google Fonts -->
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
        .i2 {
            border: 3px solid black;
            border-radius: 50%;
        }

        .bbb {
            width: 200px;
            padding-left: 75px;
            font-size: 20px;
            margin-left: 530px;
            height: 50px;
            margin-top: 640px;
        }

        .lo {
            width: 100px;
            height: 150px;
        }

        .f {
            font-size: 30px;
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
                    <li><a href="Home.php" style="font-size: 20px;">Home</a></li>
                    <li><a href="about.php" style="font-size: 20px;">About us</a></li>
                    <li><a href="contact.php" style="font-size: 20px;">Contact us</a></li>
                    <li><a class="nav-link scrollto" href="login.php" style="font-size: 20px;">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a href="buyform.php" class="book-a-table-btn scrollto d-none d-lg-flex">Buy</a>

        </div>
    </header><!-- End Header -->

   <!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Devices list</h2>
            <p>range of electronic devices</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active " style="font-size:30px">All devices</li>

                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root"; 
            $password = ""; 
            $dbname = "technologies"; 

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from devices table
            $sql = "SELECT * FROM devices";
            $result = $conn->query($sql);

            // Display fetched data
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-6 menu-item'>";
                    // You may need to adjust the image source based on your database schema
                    // echo "<img src='" . $row['image'] . "' class='menu-img' alt=''>";
                    echo "<div class='menu-content'>";
                    echo "<a href='#'>" . $row['name'] . "</a><span>$" . $row['price'] . "</span>";
                    echo "</div>";
                    echo "<div class='menu-ingredients'>";
                    echo $row['description'];
                    echo "<p>code:" . $row['code'] . "</p>";

                   // Add buttons for each item with space between them
echo "<div class='menu-buttons'>";
echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>";
echo "<span>   </span>";
echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
echo "</div>";


                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
        <a href="buyform.php" class="book-a-table-btn scrollto d-none d-lg-flex bbb">Buy</a>
    </div>
</section><!-- End Menu Section -->


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
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
