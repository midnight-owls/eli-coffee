<?php
require 'guest-connection.php'; // Database connection

// Query to retrieve items sold data
$query = "SELECT product_name, sold FROM products";
$result = mysqli_query($conn, $query);

$data = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = [
            'product_name' => $row['product_name'],
            'sold' => $row['sold']
        ];
    }
}

mysqli_close($conn);

// Send data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
