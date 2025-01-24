<?php include("user-header.php"); ?>
<?php
require("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/home.css" />
    <style>
        .gender-options {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        #address {
            width: 300px;
            height: 100px;
            resize: none;
            overflow-y: auto;
        }
        form {
            max-width: 350px;
            margin: 0 auto;
        }
        .form-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
<br>
<h1>Add or Update User Information</h1>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <!-- First Name -->
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" placeholder="Enter First Name" required><br><br>

        <!-- Last Name -->
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required><br><br>

        <!-- Phone Number -->
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required><br><br>

        <!-- Gender -->
        <label for="gender">Gender:</label>
        <div class="gender-options">
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other" required>
            <label for="other">Other</label>
        </div><br>

        <!-- Address -->
        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Enter Address" required></textarea><br><br>

        <!-- Buttons -->
        <div class="form-buttons">
            <button type="submit" name="submit">Submit</button>
            <button type="submit" name="edit">Update</button>
        </div>
    </form><br><br>

    <footer class="bg-dark text-light py-4 footer d-flex align-items-center">
    <div class="container">
      <div class="text-start ps-0">
        &copy; 2025 Eli Coffee. All rights reserved.
      </div>
    </div>
    <div class="container mx-auto d-flex justify-content-end gap-2">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating" href="https://www.facebook.com/elicoffeeph" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating" href="https://www.instagram.com/elicoffeeph/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>
</body>
</html>

<?php
// Check if the form is submitted or edited
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form data
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $phone = trim($_POST['phone']);
    $gender = trim($_POST['gender']);
    $address = trim($_POST['address']);

    // Validation flags
    $errors = [];

    // Validate First Name
    if (empty($fname) || !preg_match("/^[a-zA-Z]+$/", $fname)) {
        $errors[] = "First Name should contain only letters.";
    }

    // Validate Last Name
    if (empty($lname) || !preg_match("/^[a-zA-Z]+$/", $lname)) {
        $errors[] = "Last Name should contain only letters.";
    }

    // Validate Phone Number
    if (empty($phone) || !preg_match("/^\\+?[0-9]{10,15}$/", $phone)) {
        $errors[] = "Phone number should contain only digits and be 10-15 characters long.";
    }

    // Validate Gender
    $validGenders = ["Male", "Female", "Other"];
    if (empty($gender) || !in_array($gender, $validGenders)) {
        $errors[] = "Please select a valid gender.";
    }

    // Validate Address
    if (empty($address) || strlen($address) < 5) {
        $errors[] = "Address should be at least 5 characters long.";
    }

    // If no errors, insert or update into database
    if (empty($errors)) {
        // Escape data to prevent SQL Injection
        $fname = $conn->real_escape_string($fname);
        $lname = $conn->real_escape_string($lname);
        $phone = $conn->real_escape_string($phone);
        $gender = $conn->real_escape_string($gender);
        $address = $conn->real_escape_string($address);

        // Check if the phone number already exists
        $checkQuery = "SELECT * FROM edit_user WHERE phone = '$phone'";
        $result = $conn->query($checkQuery);

        if ($result->num_rows > 0) {
            // If the phone number exists, only allow update
            if (isset($_POST['edit'])) {
                $sql = "UPDATE edit_user SET fname='$fname', lname='$lname', gender='$gender', address='$address' WHERE phone='$phone'";
                $action = "updated";
            } else {
                echo "<script>alert('Phone number already exists. Please use the Edit button to update.');</script>";
                exit;
            }
        } else {
            // If the phone number does not exist, allow insertion
            if (isset($_POST['submit'])) {
                $sql = "INSERT INTO edit_user (fname, lname, phone, gender, address) VALUES ('$fname', '$lname', '$phone', '$gender', '$address')";
                $action = "added";
            } else {
                echo "<script>alert('Phone number does not exist. Use Submit to add the record first.');</script>";
                exit;
            }
        }

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User information $action successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    } else {
        // Display validation errors as alerts
        foreach ($errors as $error) {
            echo "<script>alert('$error');</script>";
        }
    }
}

// Close the database connection
$conn->close();
?>
