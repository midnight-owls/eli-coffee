<?php
require 'admin-connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $eventId = $_POST['event_id'];

    if (!empty($eventId)) {
        // Delete the event from the database
        $query = "DELETE FROM calendar_events WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $eventId);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'error' => 'Invalid event ID']);
    }
}

$conn->close();
?>
