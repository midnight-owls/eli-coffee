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
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet" />

  <link rel="stylesheet" href="css/guest-events.css" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/admin-signup.css">
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/override.css" />

  <script>
    // Toggle forms
    function toggleForm(showSignUp) {
      const loginForm = document.getElementById('login-form');
      const signUpForm = document.getElementById('signup-form');
      if (showSignUp) {
        loginForm.style.display = 'none';
        signUpForm.style.display = 'block';
      } else {
        loginForm.style.display = 'block';
        signUpForm.style.display = 'none';
      }
    }
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-white border-bottom rara">
    <div class="container-fluid d-flex align-items-center">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="index.php">
        <img
          src="assets/eli-coffee-icon.png"
          width="30"
          class="d-inline-block navbar-icon" />
        <span class="d-none d-md-inline">ELI Coffee</span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-4">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="guest-menu.php"
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
              <li>
                <a class="dropdown-item" href="guest-menu.php#coffee-section">Coffee</a>
              </li>
              <li>
                <a class="dropdown-item" href="guest-menu.php#tea-section">Tea</a>
              </li>
              <li>
                <a class="dropdown-item" href="guest-menu.php#frappe-section">Frappe</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="guest-menu.php#add-ons-section">Add-ons</a>
                <a class="dropdown-item" href="guest-menu.php#food-section">Food</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guest-events.php" role="button">
              Events
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guest-about-us.php">About Us</a>
          </li>
        </ul>
      </div>
      <div class="navbar-right ms-auto d-flex align-items-center">
        <a href="#">
          <button
            type="button"
            class="btn btn-primary btn-sign-in me-2">
            Sign In
          </button>
        </a>
        <a href="#">
          <button
            type="button"
            class="btn btn-primary btn-sign-up me-2">
            Sign Up
          </button>
        </a>
      </div>
    </div>
  </nav>

  <div id="modal" class="modal">
    <form id="signup-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="display: none;">
      <h2>Create an account</h2>
      <label for="">Email:</label>
      <input type="email" name="email"><br>
      <label for="">Password:</label>
      <input type="password" name="password"><br>
      <label for="">Confirm Password:</label>
      <input type="password" name="confirm_password"><br>
      <input type="submit" name="submit" id="" value="Sign Up">
      <div class="signup">
        Already have an account?
        <a href="javascript:void(0)" onclick="toggleForm(false)" style="text-decoration: none">Sign In</a>
      </div>
    </form>

    <form id="login-form" action="login.php" method="post">
      <h2>Welcome back</h2>
      <label for="">Email:</label>
      <input type="email" name="log_email"><br>
      <label for="">Password:</label>
      <input type="password" name="log_password"><br>
      <a href="#" class="forgot_pw" style="text-decoration: none">Forgot password</a>
      <input type="submit" name="submit" id="" value="Log In">
      <div class="signup">
        Don't have an account?
        <a href="javascript:void(0)" onclick="toggleForm(true)" style="text-decoration: none">Sign Up</a>
      </div>
    </form>
  </div>
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
    // Check if the email already exists in the database
    $check_query = "SELECT * FROM users WHERE email = ?";
    if ($stmt = mysqli_prepare($conn, $check_query)) {
      // Bind the email parameter
      mysqli_stmt_bind_param($stmt, "s", $email);

      // Execute the query
      mysqli_stmt_execute($stmt);

      // Store the result
      mysqli_stmt_store_result($stmt);

      // Check if any rows were returned
      if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "<script>alert('This email is already registered. Please use a different email.');</script>";
      } else {
        // If email is unique, proceed with the registration
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (email, password) VALUES (?, ?)";

        // Prepare the statement
        if ($insert_stmt = mysqli_prepare($conn, $query)) {
          // Bind parameters
          mysqli_stmt_bind_param($insert_stmt, "ss", $email, $hashed_password);

          // Execute the query
          if (mysqli_stmt_execute($insert_stmt)) {
            echo "<script>alert('You are now registered!'); window.location.href='index.php';</script>";
          } else {
            echo "<script>alert('Error: Could not execute the query.');</script>";
          }

          // Close the insert statement
          mysqli_stmt_close($insert_stmt);
        } else {
          echo "<script>alert('Error: Could not prepare the SQL query.');</script>";
        }
      }

      // Close the check statement
      mysqli_stmt_close($stmt);
    } else {
      echo "<script>alert('Error: Could not prepare the email check query.');</script>";
    }
  }

  // Close the database connection
  mysqli_close($conn);
}
?>