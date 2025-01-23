<?php
require_once "signup-connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Sanitize user input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if (empty($email)) {
        $_SESSION['info'] = "Please enter your email address.";
        header('Location: forgot-password.php');
        exit();
    }

    // Step 2: Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            // Step 3: Generate a unique OTP/token
            $otp = rand(100000, 999999);
            $_SESSION['email'] = $email; // Store email in session
            $_SESSION['otp'] = $otp;

            // Step 4: Save the OTP/token to the database
            $update_query = "UPDATE users SET reset_token = ?, reset_expires = NOW() + INTERVAL 15 MINUTE WHERE email = ?";
            if ($update_stmt = mysqli_prepare($conn, $update_query)) {
                mysqli_stmt_bind_param($update_stmt, "ss", $otp, $email);
                mysqli_stmt_execute($update_stmt);
                mysqli_stmt_close($update_stmt);

                // Step 5: Send OTP/token via email (pseudo-code for email)
                // mail($email, "Password Reset Code", "Your OTP is: $otp");

                $_SESSION['info'] = "A password reset code has been sent to your email.";
                header('Location: reset-code.php');
                exit();
            }
        } else {
            $_SESSION['info'] = "No account found with that email.";
            header('Location: forgot-password.php');
            exit();
        }

        mysqli_stmt_close($stmt);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Forgot Password</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_SESSION['info'])) {
                            echo '<div class="alert alert-info text-center">' . $_SESSION['info'] . '</div>';
                            unset($_SESSION['info']);
                        }
                        ?>
                        <form action="forgot-password.php" method="POST">
                            <div class="form-group">
                                <label for="email">Enter your email address:</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-block">Send Reset Code</button>
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
