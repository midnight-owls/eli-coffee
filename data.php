<?php
require 'guest-connection.php';

// Fetch events from the database
$rows = mysqli_query($conn, "SELECT * FROM calendar_events");
$events = [];
foreach ($rows as $row) {
    $events[] = [
        'id' => $row['id'], // Event ID for identifying events
        'title' => $row['event_type'], // Event type as the title
        'start' => $row['event_date'] . 'T' . $row['start_time'], // Combine date and time
        'end'   => $row['event_date'] . 'T' . $row['end_time'],   // Combine date and time
        'guest_volume' => $row['guest_volume'],
        'location' => $row['location'],
        'comments' => $row['comments']
    ];
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Event Calendar</title>
    <!-- CSS for FullCalendar -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

    <!-- Load jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Load Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <!-- Load FullCalendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <!-- Load Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>
    <div id="calendar"></div>
    <a href="http://localhost/eli-coffee/events.php" class="btn btn-primary back-button">Back</a>

    <!-- Modal for Event Details -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="eventTitle">Event Type</label>
                            <input type="text" class="form-control" id="eventTitle" readonly>
                        </div>
                        <div class="form-group">
                            <label for="eventStart">Start Time</label>
                            <input type="text" class="form-control" id="eventStart" readonly>
                        </div>
                        <div class="form-group">
                            <label for="eventEnd">End Time</label>
                            <input type="text" class="form-control" id="eventEnd" readonly>
                        </div>
                        <div class="form-group">
                            <label for="eventGuests">Volume of Guests</label>
                            <input type="text" class="form-control" id="eventGuests" readonly>
                        </div>
                        <div class="form-group">
                            <label for="eventLocation">Location</label>
                            <input type="text" class="form-control" id="eventLocation" readonly>
                        </div>
                        <div class="form-group">
                            <label for="eventComments">Comments</label>
                            <textarea class="form-control" id="eventComments" rows="3" readonly></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                defaultView: 'month',
                timeZone: 'local',
                events: <?php echo json_encode($events); ?>, // Pass events from PHP to JavaScript
                eventClick: function(event) {
                    // Populate modal fields with event details
                    $('#eventTitle').val(event.title);
                    $('#eventStart').val(event.start);
                    $('#eventEnd').val(event.end);
                    $('#eventGuests').val(event.guest_volume);
                    $('#eventLocation').val(event.location);
                    $('#eventComments').val(event.comments);
                    // Show the modal
                    $('#eventModal').modal('show');
                }
            });
        });
    </script>
</body>
</html>
