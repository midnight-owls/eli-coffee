<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in'])) {
    header('Location: admin-login.php');
    exit();
}

// Include the database connection file
require 'admin-dash-conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the supply ID from the form
    $supply_id = $_POST['supply_id'];

    // Prepare the SQL statement to delete the supply
    $sql = "DELETE FROM supplies WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error preparing the SQL statement: ' . $conn->error);
    }

    // Bind the supply ID parameter and execute the statement
    $stmt->bind_param('i', $supply_id);
    if ($stmt->execute()) {
        // Redirect back to the admin dashboard with success message
        $_SESSION['message'] = "Supply deleted successfully.";
        header('Location: admin-dashboard.php');
        exit();
    } else {
        // Redirect back with an error message
        $_SESSION['error'] = "Failed to delete the supply.";
        header('Location: admin-dashboard.php');
        exit();
    }

    $stmt->close();
} else {
    // Redirect back if accessed without POST method
    header('Location: admin-dashboard.php');
    exit();
}

$conn->close();
?>
