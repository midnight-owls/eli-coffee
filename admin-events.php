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
    <link rel="stylesheet" href="/admin-events/admin-dashboard.css">

    <style>
        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>

<!--     <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/index.css" /> -->
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-white border-bottom">
        <div class="container-fluid d-flex align-items-center">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand mx-auto" href="#">
            <img
              src="assets/eli-coffee-icon.png"
              width="30"
              class="d-inline-block navbar-icon"
            />
            <span class="d-none d-md-inline">ELI Coffee</span>
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-4">
              <li class="nav-item dropdown">
                <a
                  class="nav-link link-dark"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                >
                  Menu
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="bi bi-chevron-down"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                    />
                  </svg>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Coffee</a></li>
                  <li><a class="dropdown-item" href="#">Tea</a></li>
                  <li><a class="dropdown-item" href="#">Frappe</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Add-ons</a>
                    <a class="dropdown-item" href="#">Food</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="events.html">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
            </ul>
          </div>
          <div class="navbar-right d-flex align-items-center me-2">
            <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
              <img
                class="user-icon"
                src="assets/user-default-icon.png"
                width="30"
              />
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Order status</a></li>
              <li><hr class="dropdown-divider" /></li>
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
                    <a href="inventory.html" class="sidebar-link">
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