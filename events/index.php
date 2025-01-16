<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/coffee-bean-icon.png" />
    <title>ELI Coffee</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/index.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Navbar -->
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
        <a class="navbar-brand mx-auto" href="home.html">
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
                href="menu.html"
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
                <li>
                  <a class="dropdown-item" href="menu.html#coffee-section"
                    >Coffee</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="menu.html#tea-section">Tea</a>
                </li>
                <li>
                  <a class="dropdown-item" href="menu.html#frappe-section"
                    >Frappe</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="menu.html#add-ons-section"
                    >Add-ons</a
                  >
                  <a class="dropdown-item" href="menu.html#food-section"
                    >Food</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.html" role="button"> Events </a>
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

    <!-- Event Content -->
    <div
      class="container my-3 d-flex justify-content-center align-items-center flex-column"
      style="min-height: 80vh"
    >
      <h2 class="text-center mb-3">Schedule an Event</h2>
      <div class="row g-4 w-100">
        <div class="col-lg-6 mx-auto">
          <div class="px-4 py-3 border">
            <form id="eventForm" action="process_event.php" method="POST" onsubmit="return false;">
              <div class="row mb-3">
                <div class="col">
                  <label for="date" class="form-label">Date</label>
                  <input
                    type="date"
                    id="date"
                    name="date"
                    class="form-control"
                    style="border: 1px solid #000"
                    required
                  />
                </div>
                <div class="col">
                  <label for="start" class="form-label">Start</label>
                  <input
                    type="time"
                    id="start"
                    name="start"
                    class="form-control"
                    style="border: 1px solid #000"
                    required
                  />
                  <label for="end" class="form-label mt-2">End</label>
                  <input
                    type="time"
                    id="end"
                    name="end"
                    class="form-control"
                    style="border: 1px solid #000"
                    required
                  />
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
                  required
                />
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
                  required
                />
              </div>
              <div class="mb-3">
                <label for="event-location" class="form-label"
                  >Event Location</label
                >
                <input
                  type="text"
                  id="event-location"
                  name="event-location"
                  class="form-control"
                  style="border: 1px solid #000"
                  placeholder="e.g., Cafe Hall, Private Room"
                  required
                />
              </div>
              <div class="row mb-3">
                <div class="col-10">
                  <label for="comments" class="form-label">Comments</label>
                  <textarea
                    id="comments"
                    rows="4"
                    class="form-control txt-area"
                    style="resize: none; border: 1px solid #000; width: 95%"
                    placeholder="Optional: Add special requests or instructions here."
                  ></textarea>
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
                        disabled
                      >
                        Confirm
                      </button>
                    </div>
                    <div class="row mb-2">
                      <button
                        type="reset"
                        name="clear_event"
                        class="btn btn-outline-secondary w-100"
                      >
                        Clear
                      </button>
                    </div>
                    <div class="row">
                      <button
                        type="button"
                        name="view_event"
                        class="btn btn-outline-secondary w-100"
                        onclick="showScheduledEvent()"
                      >
                        View
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

    <!-- Modal for Scheduled Event -->
    <div
      class="modal fade"
      id="scheduledEventModal"
      tabindex="-1"
      aria-labelledby="scheduledEventModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <i
              class="fas fa-thumbtack"
              style="color: red; font-size: 30px; margin-right: 10px"
            ></i>
            <h5 class="modal-title" id="scheduledEventModalLabel">
              Scheduled Event
            </h5>
          </div>
          <div class="modal-body">
            <ul id="eventDetailsList"></ul>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-danger"
              onclick="deleteScheduledEvent()"
            >
              Delete
            </button>
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Exit
            </button>
          </div>
        </div>
      </div>
    </div>

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

      // Function to save event details
      function saveEventDetails() {
        const date = document.getElementById("date").value;
        const start = document.getElementById("start").value;
        const end = document.getElementById("end").value;
        const eventType = document.getElementById("event-type").value;
        const volume = document.getElementById("volume").value;
        const location = document.getElementById("event-location").value;
        const comments = document.getElementById("comments").value;

        // Convert start and end times to 12-hour format
        const formattedStart = formatTimeTo12Hour(start);
        const formattedEnd = formatTimeTo12Hour(end);

        // Retrieve existing events from localStorage or initialize an empty array
        const existingEvents = JSON.parse(localStorage.getItem("events")) || [];

        // Add the new event to the array
        existingEvents.push({
          date,
          start: formattedStart,
          end: formattedEnd,
          eventType,
          volume,
          location,
          comments,
        });

        // Save the updated array back to localStorage
        localStorage.setItem("events", JSON.stringify(existingEvents));

        alert("Event details have been saved!");
      }

      // Function to show scheduled events details in the modal
      function showScheduledEvent() {
        const events = JSON.parse(localStorage.getItem("events"));

        if (events && events.length > 0) {
          const eventDetailsList = document.getElementById("eventDetailsList");
          eventDetailsList.innerHTML = ""; // Clear previous event details

          // Loop through each event and display them
          events.forEach((event) => {
            const listItem = document.createElement("li");
            listItem.innerHTML = `
              <strong>Date:</strong> ${event.date}<br>
              <strong>Start Time:</strong> ${event.start}<br>
              <strong>End Time:</strong> ${event.end}<br>
              <strong>Event Type:</strong> ${event.eventType}<br>
              <strong>Volume of Guests:</strong> ${event.volume}<br>
              <strong>Location:</strong> ${event.location}<br>
              <strong>Comments:</strong> ${event.comments}<br><br>
            `;
            eventDetailsList.appendChild(listItem);
          });

          // Show the modal
          const myModal = new bootstrap.Modal(
            document.getElementById("scheduledEventModal")
          );
          myModal.show();
        } else {
          alert("No events scheduled. Fill up the event form first.");
        }
      }

      // Function to delete the most recent scheduled event
      function deleteScheduledEvent() {
        const events = JSON.parse(localStorage.getItem("events"));

        if (events && events.length > 0) {
          // Show a confirmation popup before deleting
          const confirmDelete = confirm(
            "Are you sure you want to delete the most recent event?"
          );
          if (confirmDelete) {
            // Remove the most recent event (last item in the array)
            events.pop();

            // Save the updated events array back to localStorage
            localStorage.setItem("events", JSON.stringify(events));

            // Hide the modal after deletion
            const myModal = bootstrap.Modal.getInstance(
              document.getElementById("scheduledEventModal")
            );
            myModal.hide();

            alert("Most recent event has been deleted.");
          } else {
            alert("Event deletion cancelled.");
          }
        } else {
          alert("No events to delete.");
        }
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$event_date = $_POST['date'];
$start_time = $_POST['start'];
$end_time = $_POST['end'];
$event_type = $_POST['event-type'];
$guest_volume = $_POST['volume'];
$location = $_POST['event-location'];
$comments = $_POST['comments'];

// Insert data into table
$sql = "INSERT INTO event_metadata (event_date, start_time, end_time, event_type, guest_volume, location, comments) 
        VALUES ('$event_date', '$start_time', '$end_time', '$event_type', $guest_volume, '$location', '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New event scheduled successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
