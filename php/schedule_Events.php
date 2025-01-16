<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eli_coffee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $eventDate = $_POST["date"];
    $startTime = $_POST["start"];
    $endTime = $_POST["end"];
    $eventType = $_POST["event-type"];
    $volumeOfGuests = $_POST["volume"];
    $eventLocation = $_POST["event-location"];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO events (event_date, start_time, end_time, event_type, volume_of_guests, event_location) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $eventDate, $startTime, $endTime, $eventType, $volumeOfGuests, $eventLocation);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Event scheduled successfully!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to schedule the event."]);
    }

    $stmt->close();
}

$conn->close();
?>
