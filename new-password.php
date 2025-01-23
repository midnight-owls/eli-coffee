<?php
require_once "signup-connection.php";
session_start();

// Check if OTP was verified and email is set
if (!isset($_SESSION['otp_verified']) || !isset($_SESSION['email'])) {
    header('Location: forgot-password.php');
    exit();
}

$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user input
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $cpassword = filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate input fields
    if (empty($password) || empty($cpassword)) {
        $_SESSION['info'] = "Please fill in all the fields.";
        header('Location: new-password.php');
        exit();
    }

    if ($password !== $cpassword) {
        $_SESSION['info'] = "Passwords do not match.";
        header('Location: new-password.php');
        exit();
    }

    // Hash the new password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Update the password in the database
    $update_query = "UPDATE users SET password = ?, reset_token = NULL, reset_expires = NULL WHERE email = ?";
    if ($stmt = mysqli_prepare($conn, $update_query)) {
        mysqli_stmt_bind_param($stmt, "ss", $hashed_password, $email);
        if (mysqli_stmt_execute($stmt)) {
            // Password update successful
            unset($_SESSION['otp_verified']);
            $_SESSION['info'] = "Your password has been updated successfully. You can now log in.";
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['info'] = "An error occurred while updating the password. Please try again.";
        }
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['info'] = "An error occurred. Please try again.";
    }

    // Redirect back to the password reset form on error
    header('Location: new-password.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Create New Password</h4>
                </div>
                <div class="card-body">
                    <?php
                    // Display informational messages if any
                    if (isset($_SESSION['info'])) {
                        echo '<div class="alert alert-info text-center">' . $_SESSION['info'] . '</div>';
                        unset($_SESSION['info']);
                    }
                    ?>
                    <form action="new-password.php" method="POST">
                        <div class="form-group">
                            <label for="password">New Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm New Password:</label>
                            <input type="password" name="cpassword" class="form-control" placeholder="Confirm new password" required>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="index.php">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
