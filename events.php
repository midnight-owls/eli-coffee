<?php include("user-header.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/coffee-bean-icon.png" />
    <title>ELI Coffee</title>
  </head>

  <body>
    <!-- Event Content -->
    <div
      class="container my-3 d-flex justify-content-center align-items-center flex-column"
      style="min-height: 80vh"
    >
      <h2 class="text-center mb-3">Schedule an Event</h2>
      <div class="row g-4 w-100">
        <div class="col-lg-6 mx-auto">
          <div class="px-4 py-3 border">
            <form id="eventForm" action="#" method="" onsubmit="return false;">
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
