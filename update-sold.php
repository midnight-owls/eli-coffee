<?php
require 'guest-connection.php'; // Database connection

// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);

// Check if cart data is provided
if (isset($data['cartData']) && is_array($data['cartData'])) {
    foreach ($data['cartData'] as $item) {
        $productName = $item['productName'];
        $quantity = $item['quantity'];

        // Update the sold column in the database
        $query = "UPDATE products SET sold = sold + ? WHERE product_name = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('is', $quantity, $productName);
        $stmt->execute();

        if ($stmt->affected_rows <= 0) {
            // If no row was updated, something went wrong
            echo json_encode(['success' => false]);
            exit;
        }
    }

    // If all updates are successful
    echo json_encode(['success' => true]);

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid data']);
}

// Close the database connection
mysqli_close($conn);
?>
