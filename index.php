<?php include("guest-header.php"); ?>
<?php
  require("signup-connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="assets/coffee-bean-icon.png" />
  <title>ELI Coffee</title>
</head>

<body>
  <!-- Home Page Content -->
  <div class="container-fluid d-flex flex-column vh-100">
    <!-- Top Half -->
    <div
      class="row flex-fill d-flex align-items-center justify-content-center top-half">
      <div
        class="col-md-6 text-center d-flex flex-column justify-content-center mt-4 mt-md-5">
        <h1 class="text-start align-self-center">
          Ground with passion,<br />brewed with love
        </h1>
        <a
          href="guest-menu.php"
          class="btn btn-primary rounded-pill mt-4 order-now align-self-center">Order Now</a>
      </div>

      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <img
          src="assets/three-cups.jpg"
          class="img-fluid rounded mx-auto d-block preview-1"
          alt="Coffee"
          id="app-app" />
      </div>
    </div>

    <!-- Bottom Half -->
    <div
      class="row flex-fill d-flex align-items-center justify-content-center mt-2 bottom-half">
      <div
        class="col-md-6 text-center d-flex flex-column justify-content-center mt-4 mt-md-5">
        <h2 class="text-start align-self-center">
          Order on the go, from anywhere,<br />with our mobile app
        </h2>
        <div class="d-flex justify-content-center mt-3">
          <a href="#"><img
              src="assets/google-play.png"
              class="img-fluid me-3 btn-download"
              alt="Google Play" /></a>
          <a href="#"><img
              src="assets/app-store.png"
              class="img-fluid me-3 btn-download"
              alt="App Store" /></a>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <img
          src="assets/mobile-ordering.png"
          class="img-fluid rounded mx-auto d-block my-2 preview-2"
          id="app-app1"
          alt="Coffee" />
      </div>
    </div>
  </div>

  <div class="form_container">
    <i class="uil uil-times form_close"></i>

    <!-- Sign In / Sign Up -->
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Sign Up!</h2>
        <label for="">Email:</label><br>
        <input type="email" name="email"><br>
        <label for="">Password:</label><br>
        <input type="password" name="password"><br>
        <label for="">Confirm Password:</label><br>
        <input type="password" name="confirm_password"><br>
        <input type="submit" name="submit" id="" value="Register">
        <div class="signup">
        Already have an account?
        <a href="javascript:void(0)" onclick="toggleForm(false)" style="text-decoration: none">Login</a>
      </div>
    </form>

    
  <form action="login.php" method="post">
        <h2>Welcome to Eli Coffee!</h2>
        <label for="">Email:</label><br>
        <input type="email" name="log_email"><br>
        <label for="">Password:</label><br>
        <input type="password" name="log_password"><br>
          <a href="#" class="forgot_pw" style="text-decoration: none">
            Forgot password</a
          >
        <input type="submit" name="submit" id="" value="Log In">
        <div class="signup">
        Don't have an account?
        <a href="javascript:void(0)" onclick="toggleForm(true)" style="text-decoration: none">Signup</a>
      </div>
    </form>

  <footer class="bg-dark text-light py-4 footer">
    <div class="container">
      <div class="row">
        <!-- Contact Us -->
        <div class="col-md-4">
          <h6>Contact Us</h6>
          <p><strong>Eli Coffee</strong></p>
          <p>2nd Floor Pearl Building, Binangonan, Philippines</p>
          <p><strong>Phone:</strong> 0917 562 0306</p>
          <p><strong>Email:</strong> <a href="mailto:elicoffeetea@gmail.com" class="text-light text-decoration-none">elicoffeetea@gmail.com</a></p>
        </div>

        <!-- About Us -->
        <div class="col-md-4 text-center">
          <h6>About Us</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-light text-decoration-none">Our Company</a></li>
            <li><a href="#" class="text-light text-decoration-none">Stories and News</a></li>
            <li><a href="#" class="text-light text-decoration-none">Customer Service</a></li>
          </ul>
        </div>

        <!-- Opening Hours -->
        <div class="col-md-4 text-end">
          <h6>Opening Hours</h6>
          <ul class="list-unstyled">
            <li><strong>Monday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Tuesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Wednesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Thursday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Friday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Saturday:</strong> 8:00 am - 2:00 pm</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p class="mb-0">&copy; 2025 Eli Coffee. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_SPECIAL_CHARS);

    // Check if email and passwords are not empty and if passwords match
    if (empty($email)) {
        echo "<script>alert('Please enter an email.');</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Please enter a password.');</script>";
    } elseif (empty($confirm_password)) {
        echo "<script>alert('Please confirm your password.');</script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.');</script>";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare SQL query with placeholders
        $query = "INSERT INTO users (email, password) VALUES (?, ?)";

        // Prepare the statement
        if ($stmt = mysqli_prepare($conn, $query)) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "ss", $email, $hashed_password);

            // Execute the query
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('You are now registered!'); window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Error: Could not execute the query.');</script>";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Error: Could not prepare the SQL query.');</script>";
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>