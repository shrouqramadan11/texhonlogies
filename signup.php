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

if ($_POST) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Check if email already exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email already exists in the database
        echo "Email already exists! Please use a different email.";
    } else {
        // Check if password and confirm password match
        if ($password !== $confirmpassword) {
            echo "Passwords do not match!";
        } else {
            // Passwords match, proceed with signup
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into the database
            $insert_sql = "INSERT INTO users (name, email, password, confirmpassword, address, phone) VALUES ('$name', '$email', '$hashed_password', '$confirmpassword', '$address', '$phone')";
            if ($conn->query($insert_sql) === TRUE) {
                echo "Signup successful!";
                $inserted_user_id = $conn->insert_id; // Get the ID of the inserted user
                header("Location: login.php?id=$inserted_user_id");
                exit();
            } else {
                echo "Error: " . $insert_sql . "<br>" . $conn->error;
            }
        }
    }
} else {
    echo "Please sign up";
}

// Close connection
$conn->close();
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



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p style="margin-left:600px">Sign up</p>
        </div>
      </div>

      <div data-aos="fade-up">

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              

            
                
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

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" style="margin-left:250px" >

            <form action="" method="post" role="form" class="php-email-form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="subject" placeholder="Password" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="confirmpassword" id="subject" placeholder="Confirm Password" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="address" id="subject" placeholder="Address" required>
              </div>
              
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="phone" id="subject" placeholder="Phone" required>
              </div>
              
              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent, thank you</div>
              </div>
              <div class="text-center"><button type="submit" style="width:250px">Sign up</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>
