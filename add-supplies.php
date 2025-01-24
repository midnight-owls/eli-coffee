<?php
// Include the database connection file
include 'admin-dash-conn.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $supply_id = mysqli_real_escape_string($conn, $_POST['supply_id']);
    $supply_name = mysqli_real_escape_string($conn, $_POST['supply_name']);
    $quantity = intval($_POST['quantity']);

    // Insert data into the supplies table
    $query = "INSERT INTO supplies (id, supply, quantity) VALUES ('$supply_id', '$supply_name', $quantity)";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Supply added successfully!'); window.location.href = 'admin-dashboard.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href = 'admin-dashboard.php';</script>";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the dashboard if the page is accessed without submitting the form
    header('Location: admin-dashboard.php');
    exit;
}
?>
