
    <?php
    require "php/database.php";

    if (isset($_POST["confirm_event"])) {
        $event_date = $_POST["date"];
        $start_time = $_POST["start"];
        $end_time = $_POST["end"];
        $event_type = $_POST["event-type"];
        $guest_volume = $_POST["volume"];
        $event_location = $_POST["event-location"];
        $comments = $_POST["comments"];
      
        $query = "INSERT INTO eli_coffeedb (event_date, start_time, end_time, event_type, guest_volume, event_location)
                  VALUES ('$event_date', '$start_time', '$end_time', '$event_type', '$guest_volume', '$event_location')";
        mysqli_query($conn, $query);
    }
      
        /* if (mysqli_query($conn, $query)) {
          echo "<script>alert('Event Successfully Scheduled'); window.location.href = '../view_events.php';</script>";
        } else {
          echo "<script>alert('Failed to Schedule Event'); window.history.back();</script>";
        } */


    ?>