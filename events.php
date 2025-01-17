<?php include("user-header.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/coffee-bean-icon.png" />
    <title>ELI Coffee</title>
<<<<<<<< HEAD:events/events-index.php
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
    <style>
        .back-button {
            position: absolute;
            top: 120px;
            right: 20px;
        }
    </style>
========
>>>>>>>> main:events.php
  </head>

  <body>
    <!-- Event Content -->
    <div
      class="container my-3 d-flex justify-content-center align-items-center flex-column"
      style="min-height: 80vh"
    >
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
                    name="comments"
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
                  </div>
                </div>
              </div>
            </form>
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



