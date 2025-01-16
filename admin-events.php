<?php
require 'admin-connection.php';

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin-dashboard.css" />
    <link rel="stylesheet" href="css/index.css" />
    <style>
    /* Adjust the calendar's overall appearance */
    #calendar {
        max-width: 900px;
        margin: 30px auto;
        background-color: #ffffff; /* Background color for better contrast */
        border: 1px solid #ddd; /* Add a subtle border */
        border-radius: 8px; /* Rounded corners for a softer look */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Slight shadow for depth */
        padding: 20px; /* Add padding around the calendar */
    }

    /* Style event blocks */
    .fc-event {
        background-color: #5cb85c !important; /* Green background for events */
        border: none !important; /* Remove default border */
        color: #fff !important; /* White text for better readability */
        font-size: 14px; /* Increase text size */
        padding: 5px; /* Add padding to the event block */
        border-radius: 4px; /* Rounded corners for events */
    }

    /* Hover effect for events */
    .fc-event:hover {
        background-color: #4cae4c !important; /* Slightly darker green on hover */
        cursor: pointer;
    }

    /* Header styles */
    .fc-toolbar {
        background-color: #f8f9fa; /* Light gray background */
        border-bottom: 1px solid #ddd; /* Subtle border at the bottom */
        padding: 10px; /* Add padding to the toolbar */
        border-radius: 8px 8px 0 0; /* Rounded corners for the top */
    }

    /* Button styles */
    .fc-toolbar button {
        background-color: #007bff; /* Blue background */
        color: #fff; /* White text */
        border: none; /* Remove border */
        border-radius: 4px; /* Rounded corners */
        padding: 5px 10px; /* Adjust padding */
        margin: 0 5px; /* Add spacing between buttons */
    }

    .fc-toolbar button:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }

    /* Table cells for dates */
    .fc-day {
        height: 100px; /* Ensure consistent height for cells */
        vertical-align: top; /* Align content to the top */
    }

    /* Today's date highlight */
    .fc-today {
        background-color:rgb(185, 220, 15) !important; /* Light gray background */
        border: 1px solid #adb5bd !important; /* Subtle border */
    }

    /* Weekend styling */
    .fc-sun, .fc-sat {
        background-color: #f8f9fa !important; /* Light gray background */
    }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-white border-bottom">
    <div class="container-fluid d-flex align-items-center">
        <a class="navbar-brand d-flex align-items-center me-auto" href="#">
            <img src="assets/eli-coffee-icon.png" width="30" class="d-inline-block navbar-icon" />
            <span class="d-none d-md-inline ms-2">ELI Coffee</span>
        </a>
            <div class="dashboard">Dashboard</div>
            <div class="navbar-right d-flex align-items-center me-2">
                <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                    <img class="user-icon" src="assets/user-default-icon.png" width="30" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Edit profile</a></li>
                    <li><a class="dropdown-item" href="home.html">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>

      <!-- content of the page -->
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <div id="toggle-btn" type="button"><i class="lni lni-menu-cheesburger"></i></div>
            </div>
            <div class="admin-info">
                <img class="admin-image" src="assets/user-default-icon.png" alt="">
                <div class="admin-name">Admin name</div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="admin-dashboard.php" class="sidebar-link">
                        <i class="lni lni-home-2"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="inventory.php" class="sidebar-link">
                        <i class="lni lni-menu-hamburger-1"></i>
                        <span>Menu and Inventory</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin-events.php" class="sidebar-link">
                        <i class="lni lni-calendar-days"></i>
                        <span>Events</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="home.html" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div id="calendar"></div>
        </div>
        
    <!-- Modal for Event Details -->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                    <div>
                        <button id="removeEventButton">Remove Event</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="/js/admin-dashboard.js"></script>
    <script src="js/events.js"></script>
    <script>
        $(document).ready(function () {
    $('#calendar').fullCalendar({
        defaultView: 'month',
        timeZone: 'local',
        events: <?php echo json_encode($events); ?>, // Pass events from PHP to JavaScript
        eventClick: function (event) {
            // Populate modal fields with event details
            $('#eventTitle').val(event.title);
            $('#eventStart').val(event.start);
            $('#eventEnd').val(event.end);
            $('#eventGuests').val(event.guest_volume);
            $('#eventLocation').val(event.location);
            $('#eventComments').val(event.comments);
            $('#eventModal').modal('show');

            // Store event ID in the button for deletion
            $('#removeEventButton').data('eventId', event.id);
        },
    });

    // Handle remove event button click
    $('#removeEventButton').on('click', function () {
        const eventId = $(this).data('eventId');

        if (confirm('Are you sure you want to delete this event?')) {
            $.ajax({
                url: 'delete-event.php',
                type: 'POST',
                data: { event_id: eventId },
                success: function (response) {
                    const result = JSON.parse(response);

                    if (result.success) {
                        // Remove the event from the calendar
                        $('#calendar').fullCalendar('removeEvents', eventId);
                        alert('Event deleted successfully.');
                        $('#eventModal').modal('hide');
                    } else {
                        alert('Failed to delete event: ' + result.error);
                    }
                },
                error: function () {
                    alert('An error occurred while deleting the event.');
                },
            });
        }
    });
});
    </script>

</body>
</html>