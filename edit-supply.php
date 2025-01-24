<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: admin-login.php');
    exit();
}

require 'admin-dash-conn.php';

// Check if the supply ID is provided
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM supplies WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error preparing the SQL statement: ' . $conn->error);
    }

    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any row is returned
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        $error = "Supply not found!";
        $row = null; // Explicitly set $row to null if no record is found
    }
}

// Handle form submission
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $quantity = intval($_POST['quantity']);

    $sql = "UPDATE supplies SET supply = ?, quantity = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error preparing the SQL statement: ' . $conn->error);
    }

    $stmt->bind_param('sii', $name, $quantity, $id);
    $stmt->execute();

    // Check if the update was successful
    if ($stmt->affected_rows > 0) {
        $message = "Supply updated successfully!";

        // Redirect to admin dashboard after successful update
        header('Location: admin-dashboard.php');
        exit(); // Stop further execution to prevent accidental output
    } else {
        $error = "No changes were made.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supply</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 300px;
            margin: 80px auto;
            background-color: whitesmoke;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }
        button:hover {
            background: #0056b3;
        }
        .message {
            color: green;
            margin-top: 10px;
            text-align: center;
        }
        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
        p a {
    text-align: center;
    display: block;
    margin-top: 15px; /* Optional: to add some space above the link */
    text-decoration: none;
    color: #007BFF;
}

p a:hover {
    color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Supply</h1>

        <?php if (!empty($message)): ?>
            <p class="message"><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form method="POST">
    <input type="hidden" name="id" value="<?php echo isset($row) ? htmlspecialchars($row['id']) : ''; ?>">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($row) ? htmlspecialchars($row['supply']) : ''; ?>" required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" value="<?php echo isset($row) ? htmlspecialchars($row['quantity']) : ''; ?>" required>

    <button type="submit">Update</button>
</form>

        <p><a href="admin-dashboard.php">Back to Dashboard</a></p>
    </div>
</body>
</html>
