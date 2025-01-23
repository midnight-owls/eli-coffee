<?php
require_once "signup-connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user-entered OTP and email from session
    $entered_otp = filter_input(INPUT_POST, 'otp', FILTER_SANITIZE_NUMBER_INT);
    $email = $_SESSION['email'] ?? '';

    if (empty($email) || empty($entered_otp)) {
        $_SESSION['info'] = "Invalid request. Please try again.";
        header('Location: forgot-password.php');
        exit();
    }

    // Check OTP in the database
    $query = "SELECT reset_token, reset_expires FROM users WHERE email = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $reset_token, $reset_expires);

        if (mysqli_stmt_fetch($stmt)) {
            $current_time = date("Y-m-d H:i:s");
            if ($entered_otp == $reset_token && $reset_expires > $current_time) {
                // OTP is valid
                $_SESSION['otp_verified'] = true;
                header('Location: new-password.php');
                exit();
            } else {
                // Invalid or expired OTP
                $_SESSION['info'] = "Invalid or expired OTP. Please try again.";
            }
        } else {
            $_SESSION['info'] = "No record found. Please try again.";
        }
        mysqli_stmt_close($stmt);
    }
    header('Location: reset-code.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Enter Reset Code</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_SESSION['info'])) {
                        echo '<div class="alert alert-info text-center">' . $_SESSION['info'] . '</div>';
                        unset($_SESSION['info']);
                    }
                    ?>
                    <form action="reset-code.php" method="POST">
    <div class="form-group">
        <label for="otp">Enter the OTP sent to your email:</label>
        <input type="number" name="otp" class="form-control" placeholder="Enter OTP" required>
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary btn-block">Verify Code</button>
    </div>
</form>

                </div>
                <div class="card-footer text-center">
                    <a href="forgot-password.php">Resend Code</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
