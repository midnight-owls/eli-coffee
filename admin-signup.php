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
  <link rel="stylesheet" href="css/admin-signup.css" />
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

<body onload="toggleForm(false)"> <!-- Show login form by default -->
  <div class="container mt-5">
    <!-- Sign Up Form -->
    <form id="signup-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="display: none;">
      <h2>Sign Up!</h2>
      <label for="name">Name:</label><br>
      <input type="text" name="name" required><br>
      <label for="email">Email:</label><br>
      <input type="email" name="email" required><br>
      <label for="password">Password:</label><br>
      <input type="password" name="password" required><br>
      <label for="confirm_password">Confirm Password:</label><br>
      <input type="password" name="confirm_password" required><br>
      <input type="submit" name="submit" value="Register">
      <div class="signup">
        Already have an account?
        <a href="javascript:void(0)" onclick="toggleForm(false)" style="text-decoration: none">Login</a>
      </div>
    </form>

    <!-- Login Form -->
    <form id="login-form" action="admin-login.php" method="post">
      <h2>Hello Admin!</h2>
      <label for="log_email">Email:</label><br>
      <input type="email" name="log_email" required><br>
      <label for="log_password">Password:</label><br>
      <input type="password" name="log_password" required><br>
      <input type="submit" name="submit" value="Log In">
      <div class="signup">
        Don't have an account?
        <a href="javascript:void(0)" onclick="toggleForm(true)" style="text-decoration: none">Signup</a>
      </div>
    </form>
  </div>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_EMAIL);
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
        $query = "INSERT INTO admin (name, email, password) VALUES (?, ?, ?)";

        // Prepare the statement
        if ($stmt = mysqli_prepare($conn, $query)) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "sss", $name,$email, $hashed_password);

            // Execute the query
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('You are now registered!');</script>";
            } else {
                echo "<script>alert('Error: Could not execute the query.');</script>";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<script>alert('Error: Could not prepare the SQL query.');</script>";
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>
