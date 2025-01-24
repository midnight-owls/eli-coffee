<?php

// Include the database connection file
require("database.php");

// Start the session to access session variables
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Get the user's email from the session
$email = $_SESSION['user_email'];

// Handle form submission to update the name and/or password
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate inputs
    $name = htmlspecialchars($_POST['name']);
    $password = $_POST['password'];

    // Fetch the current name and password from the database
    $sql = "SELECT name, password FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user_data = $result->fetch_assoc();
        $stmt->close();
    } else {
        die("Error preparing the SQL statement: " . $conn->error);
    }

    // Check if the name is different from the current name
    if ($name === $user_data['name']) {
        $message = "Name is already up to date!";
    } else {
        // Update the admin's name in the database
        $update_sql = "UPDATE admin SET name = ? WHERE email = ?";
        $stmt = $conn->prepare($update_sql);
        if ($stmt) {
            $stmt->bind_param("ss", $name, $email);
            if ($stmt->execute()) {
                $message = "Name updated successfully!";
            } else {
                $message = "Error updating name: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $message = "Error preparing the SQL statement: " . $conn->error;
        }
    }

    // Check if the password was changed
    if (!empty($password)) {
        // Hash the new password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Update the password in the database
        $update_password_sql = "UPDATE admin SET password = ? WHERE email = ?";
        $stmt = $conn->prepare($update_password_sql);
        if ($stmt) {
            $stmt->bind_param("ss", $hashed_password, $email);
            if ($stmt->execute()) {
                $message .= " Password updated successfully!";
            } else {
                $message .= " Error updating password: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $message .= " Error preparing the password update SQL statement: " . $conn->error;
        }
    }
}

// Fetch the admin's current name
$sql = "SELECT name FROM admin WHERE email = ?";
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_data = $result->fetch_assoc();
    $stmt->close();
} else {
    die("Error preparing the SQL statement: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/admin-dashboard.css" />
    <style>
        /* Center the form container on the page */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .form-container {
            max-width: 300px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
        }

        .form-container .error,
        .form-container .success {
            color: red;
            font-weight: bold;
            text-align: center;
        }

        .form-container .success {
            color: green;
        }

        .form-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-container input {
            width: 93%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        /* Back to dashboard button */
        .back-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 93px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Admin Profile</h2>

        <!-- Message Display -->
        <?php if (isset($message)) : ?>
            <p class="<?php echo $message === "Name updated successfully!" || strpos($message, 'Password updated successfully!') !== false ? 'success' : 'error'; ?>">
                <?php echo $message; ?>
            </p>
        <?php endif; ?>

        <!-- Form to Update Name and Password -->
        <form method="POST" action="admin-edit-profile.php">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user_data['name']); ?>" required>
            </div>

            <div>
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter new password (optional)">
            </div>

            <div>
                <button type="submit">Update Profile</button>
            </div>
        </form>

        <!-- Back to Admin Dashboard Button -->
        <a href="admin-dashboard.php" class="back-btn">Back to Dashboard</a>
    </div>
</body>
</html>
