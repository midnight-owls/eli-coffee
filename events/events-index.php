<?php include("user-header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="../assets/coffee-bean-icon.png" />
  <title>ELI Coffee</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    rel="stylesheet" />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="../css/events.css" />
  <style>
    .back-button {
      position: absolute;
      top: 120px;
      right: 20px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-white border-bottom rara">
    <div class="container-fluid d-flex align-items-center">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="home.php">
        <img
          src="../assets/eli-coffee-icon.png"
          width="30"
          class="d-inline-block navbar-icon" />
        <span class="d-none d-md-inline">ELI Coffee</span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-4">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="menu.php"
              role="button"
              data-bs-toggle="dropdown">
              Menu
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bi bi-chevron-down"
                viewBox="0 0 16 16">
                <path
                  fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="menu.php#coffee-section">Coffee</a>
              </li>
              <li>
                <a class="dropdown-item" href="menu.php#tea-section">Tea</a>
              </li>
              <li>
                <a class="dropdown-item" href="menu.php#frappe-section">Frappe</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="menu.php#add-ons-section">Add-ons</a>
                <a class="dropdown-item" href="menu.php#food-section">Food</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events.php" role="button">
              Events
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About Us</a>
          </li>
        </ul>
      </div>
      <div class="navbar-right d-flex align-items-center me-2">
        <a href="index.php">
          <button type="button" class="btn btn-primary btn-sign-in">
            SIGN OUT
          </button>
        </a>
      </div>
    </div>
  </nav>
  <!-- Event Content -->
  <div
    class="container my-3 d-flex justify-content-center align-items-center flex-column"
    style="min-height: 80vh">
    <a href="http://localhost/eli-coffee/events/data.php" class="btn btn-primary back-button">View Calendar Schedules</a>
    <h2 class="text-center mb-3">Schedule an Event</h2>
    <div class="row g-4 w-100">
      <div class="col-lg-6 mx-auto">
        <div class="px-4 py-3 border">
          <form id="eventForm" method="POST">
            <div class="row mb-3">
              <div class="col">
                <label for="date" class="form-label">Date</label>
                <input
                  type="date"
                  id="date"
                  name="date"
                  class="form-control"
                  style="border: 1px solid #000"
                  required />
              </div>
              <div class="col">
                <label for="start" class="form-label">Start</label>
                <input
                  type="time"
                  id="start"
                  name="start"
                  class="form-control"
                  style="border: 1px solid #000"
                  required />
                <label for="end" class="form-label mt-2">End</label>
                <input
                  type="time"
                  id="end"
                  name="end"
                  class="form-control"
                  style="border: 1px solid #000"
                  required />
              </div>
            </div>
            <div class="mb-3">
              <label for="event-type" class="form-label">Event Type</label>
              <input
                type="text"
                id="event-type"
                name="event-type"
                class="form-control"
                style="border: 1px solid #000"
                placeholder="e.g., Birthday Party, Corporate Meeting"
                required />
            </div>
            <div class="mb-3">
              <label for="volume" class="form-label">Volume of Guests</label>
              <input
                type="text"
                id="volume"
                name="volume"
                class="form-control"
                style="border: 1px solid #000"
                placeholder="e.g., 50 Guests"
                required />
            </div>
            <div class="mb-3">
              <label for="event-location" class="form-label">Event Location</label>
              <input
                type="text"
                id="event-location"
                name="event-location"
                class="form-control"
                style="border: 1px solid #000"
                placeholder="e.g., Cafe Hall, Private Room"
                required />
            </div>
            <div class="row mb-3">
              <div class="col-10">
                <label for="comments" class="form-label">Comments</label>
                <textarea
                  id="comments"
                  name="comments"
                  rows="4"
                  class="form-control txt-area"
                  style="resize: none; border: 1px solid #000; width: 95%"
                  placeholder="Optional: Add special requests or instructions here."></textarea>
              </div>
              <div class="col-2 d-flex align-items-end justify-content-end">
                <div style="margin-right: 30px">
                  <div class="row mb-2">
                    <button
                      type="submit"
                      name="confirm_event"
                      class="btn btn-outline-secondary w-100"
                      onclick="saveEventDetails()"
                      id="confirmButton"
                      disabled>
                      Confirm
                    </button>
                  </div>
                  <div class="row mb-2">
                    <button
                      type="reset"
                      name="clear_event"
                      class="btn btn-outline-secondary w-100">
                      Clear
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-light py-4 footer">
    <div class="container">
      <div class="row">
        <!-- Contact Us -->
        <div class="col-md-4">
          <h6>Contact Us</h6>
          <p><strong>Eli Coffee</strong></p>
          <p>2nd Floor Pearl Building, Binangonan, Philippines</p>
          <p><strong>Phone:</strong> 0917 562 0306</p>
          <p><strong>Email:</strong> <a href="mailto:elicoffeetea@gmail.com" class="text-light text-decoration-none">elicoffeetea@gmail.com</a></p>
        </div>

        <!-- About Us -->
        <div class="col-md-4 text-center">
          <h6>About Us</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-light text-decoration-none">Our Company</a></li>
            <li><a href="#" class="text-light text-decoration-none">Stories and News</a></li>
            <li><a href="#" class="text-light text-decoration-none">Customer Service</a></li>
          </ul>
        </div>

        <!-- Opening Hours -->
        <div class="col-md-4 text-end">
          <h6>Opening Hours</h6>
          <ul class="list-unstyled">
            <li><strong>Monday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Tuesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Wednesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Thursday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Friday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Saturday:</strong> 8:00 am - 2:00 pm</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p class="mb-0">&copy; 2025 Eli Coffee. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Enable Confirm button if all required inputs are filled
    const requiredInputs = document.querySelectorAll(
      "#eventForm input[required]"
    );
    requiredInputs.forEach((input) => {
      input.addEventListener("input", toggleConfirmButton);
    });

    function toggleConfirmButton() {
      const allFilled = Array.from(requiredInputs).every(
        (input) => input.value
      );
      document.getElementById("confirmButton").disabled = !allFilled;
    }

    function formatTimeTo12Hour(time) {
      const [hours, minutes] = time.split(":");
      const period = hours >= 12 ? "PM" : "AM";
      const formattedHours = hours % 12 || 12; // Convert 0 or 12-hour format
      return `${formattedHours}:${minutes} ${period}`;
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php
require 'connection.php';

if (isset($_POST["confirm_event"])) {
  $event_date = $_POST['date'];
  $start_time = $_POST['start'];
  $end_time = $_POST['end'];
  $event_type = $_POST['event-type'];
  $guest_volume = $_POST['volume'];
  $location = $_POST['event-location'];
  $comments = $_POST['comments'];

  // Check if the date already exists in the database
  $check_query = "SELECT * FROM calendar_events WHERE event_date = '$event_date'";
  $result = mysqli_query($conn, $check_query);

  if (mysqli_num_rows($result) > 0) {
    echo "
        <script>
            alert('This date is already scheduled. Please choose another date.');
        </script>
        ";
  } else {
    // Insert the data into the database
    $query = "INSERT INTO calendar_events (event_date, start_time, end_time, event_type, guest_volume, location, comments) 
                  VALUES ('$event_date', '$start_time', '$end_time', '$event_type', '$guest_volume', '$location', '$comments')";

    if (mysqli_query($conn, $query)) {
      echo "
            <script>
                alert('Event added successfully!'); 
                document.location.href = 'data.php';
            </script>
            ";
    } else {
      echo "
            <script>
                alert('Error adding event: " . mysqli_error($conn) . "');
            </script>
            ";
    }
  }
}

?>