<?php
$conn = mysqli_connect("localhost", "root", "", "eli_coffeedb");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
