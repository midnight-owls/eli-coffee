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
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/home.css" />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-white border-bottom">
    <div class="container-fluid d-flex align-items-center">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="home.php">
        <img
          src="assets/eli-coffee-icon.png"
          width="30"
          class="d-inline-block d-xxl-none navbar-icon" />
        <span class="d-none d-md-inline">ELI Coffee</span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto justify-content-center">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="guest-menu.html"
              role="button"
              data-bs-toggle="dropdown">
              Menu
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bi bi-chevron-down"
                viewBox="0 0 16 16">
                <path
                  fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Coffee</a></li>
              <li><a class="dropdown-item" href="#">Tea</a></li>
              <li><a class="dropdown-item" href="#">Frappe</a></li>
              <li><a class="dropdown-item" href="#">Sparkle series</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Add-ons</a>
                <a class="dropdown-item" href="#">Food</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guest-events.html">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
        </ul>
      </div>
      <div class="navbar-right ms-auto d-flex align-items-center">
        <a href="#">
          <button
            type="button"
            class="btn btn-outline-secondary rounded-pill me-2 btn-sign-up">
            Sign Up
          </button>
        </a>
        <a href="#">
          <button
            type="button"
            class="btn btn-outline-secondary rounded-pill me-2 btn-sign-in">
            Log In
          </button>
        </a>
      </div>
    </div>
  </nav>

  <!-- Home Page Content -->
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

  <!-- Body Content -->
  <div class="front-page1">
    <img src="assets/guest/guest1.jpg" alt="background-coffee" class="img" />
    <div class="content">
      <h2>“Brewed Perfection, Served with Passion.”</h2>
      <button>Order Now</button>
    </div>
  </div>

  <h1>OUR COFFEE</h1>
  <p>
    "We’ve carefully selected rich, flavorful tastes from around the world."
  </p>

  <div class="front-page2">
    <img src="assets/guest/guest2.jpg" alt="coffee" />
    <img src="assets/guest/guest3.jpg" alt="wedding-events" />
    <h2>COME VISIT US</h2>
    <img src="assets/guest/guest4.jpg" alt="birthday-events" />
    <img src="assets/guest/guest5.jpg" alt="chicken-food" />
  </div>

  <footer>
    <div class="about-us">
      <h2>About Us</h2>
      <p>Our Company</p>
      <p>Stories and News</p>
      <p>Customer Service</p>
    </div>

    <div class="contact-us">
      <h2>Contact Us</h2>
      <p><strong>Eli Coffee</strong></p>
      <p>2nd floor Pearl Building, Binangonan, Philippines</p>
      <p><strong>Phone:</strong> 0917 562 0306</p>
      <p><strong>Email:</strong> elicoffeetea@gmail.com</p>
    </div>

    <div class="opening-hours">
      <h2>Opening Hours</h2>
      <br />
      <p><strong>Monday</strong> 7:00 am - 5 pm</p>
      <p><strong>Tuesday</strong> 7:00 am - 5 pm</p>
      <p><strong>Wednesday</strong> 7:00 am - 5 pm</p>
      <p><strong>Thursday</strong> 7:00 am - 5 pm</p>
      <br />
      <p><strong>Friday</strong> 7:00 am - 5 pm</p>
      <br />
      <p><strong>Saturday</strong> 8:00 am - 2 pm</p>
      <br />
      <p><strong>Sunday</strong> CLOSED</p>
    </div>
  </footer>

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
