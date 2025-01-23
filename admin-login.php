<?php
require("signup-connection.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get inputs
    $log_email = $_POST['log_email'] ?? '';
    $log_password = $_POST['log_password'] ?? '';

    // Validate inputs
    if (empty($log_email) || empty($log_password)) {
        echo "<script>alert('Email and Password are required.'); window.location.href='admin-login.php';</script>";
        exit();
    }

    if (!filter_var($log_email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.'); window.location.href='admin-login.php';</script>";
        exit();
    }

    // Query the database to check if the email exists
    $query = "SELECT password FROM admin WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $log_email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            // Fetch the hashed password
            mysqli_stmt_bind_result($stmt, $hashed_password);
            mysqli_stmt_fetch($stmt);

            // Verify the password
            if (password_verify($log_password, $hashed_password)) {
                // Set session variables
                $_SESSION['logged_in'] = true;
                $_SESSION['user_email'] = $log_email;

                // Redirect to the dashboard
                header("Location: admin-dashboard.php");
                exit();
            } else {
                echo "<script>alert('Incorrect password.'); window.location.href='admin-signup.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('No account found with that email.'); window.location.href='admin-signup.php';</script>";
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Database error.'); window.location.href='admin-signup.php';</script>";
        exit();
    }
}

// Close the database connection
mysqli_close($conn);
?>
