<?php
$conn = mysqli_connect("localhost", "root", "", "eli_coffeedb");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
