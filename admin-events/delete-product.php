<?php
require 'admin-connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];

    if (!empty($productId)) {
        // Fetch the image file name from the database
        $query = "SELECT product_img FROM products WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $productId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imageFile = '../img/' . $row['product_img']; // Path to the image file

            // Check if the image file exists and delete it
            if (file_exists($imageFile)) {
                if (unlink($imageFile)) {
                    echo "Image file deleted successfully.";
                } else {
                    echo "Error deleting image file.";
                }
            } else {
                echo "Image file does not exist.";
            }
        }

        // Delete the product record from the database
        $deleteQuery = "DELETE FROM products WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteQuery);
        $deleteStmt->bind_param('i', $productId);

        if ($deleteStmt->execute()) {
            echo"<script>window.location.href = 'admin-inventory.php';</script>";
        } else {
            echo "Error deleting product: " . $conn->error;
        }

        $stmt->close();
        $deleteStmt->close();
    }
}
$conn->close();
?>
