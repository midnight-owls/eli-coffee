<?php include("header.php"); ?> <!-- Includes the header.php file -->

<!DOCTYPE html>
<html lang="en">

<body>
  <!-- Event Content -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Schedule an Event</h2>
    <div class="container px-5 py-4 border" style="max-width: 800px;">
      <form id="eventForm" onsubmit="return false;">
        <div class="row mb-3">
          <div class="col">
            <label for="date" class="form-label">Date</label>
            <input type="date" id="date" name="date" class="form-control" style="border: 1px solid #000;" required />
          </div>
          <div class="col">
            <label for="start" class="form-label">Start</label>
            <input type="time" id="start" name="start" class="form-control" style="border: 1px solid #000;" required />
            <label for="end" class="form-label mt-2">End</label>
            <input type="time" id="end" name="end" class="form-control" style="border: 1px solid #000;" required />
          </div>
        </div>
        <div class="mb-3">
          <label for="event-type" class="form-label">Event Type</label>
          <input type="text" id="event-type" name="event-type" class="form-control" style="border: 1px solid #000;" required />
        </div>
        <div class="mb-3">
          <label for="volume" class="form-label">Volume of Guests</label>
          <input type="text" id="volume" name="volume" class="form-control" style="border: 1px solid #000;" required />
        </div>
        <div class="mb-3">
          <label for="event-location" class="form-label">Event Location</label>
          <input type="text" id="event-location" name="event-location" class="form-control" style="border: 1px solid #000;" required />
        </div>
        <div class="row mb-3">
          <div class="col-10">
            <label for="comments" class="form-label">Comments</label>
            <textarea id="comments" rows="5" class="form-control" style="resize: none; border: 1px solid #000;"></textarea>
          </div>
          <div class="col-2 d-flex align-items-center justify-content-end">
            <div style="margin-right: 30px;">
              <div class="row mb-2">
                <button type="button" class="btn btn-outline-secondary w-100" onclick="saveEventDetails()" id="confirmButton" disabled>Confirm</button>
              </div>
              <div class="row mb-2">
                <button type="reset" class="btn btn-outline-secondary w-100">Clear</button>
              </div>
              <div class="row">
                <button type="button" class="btn btn-outline-secondary w-100" onclick="showScheduledEvent()">View</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

    <!-- Modal for Scheduled Event -->
    <div class="modal fade" id="scheduledEventModal" tabindex="-1" aria-labelledby="scheduledEventModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <i class="fas fa-thumbtack" style="color: red; font-size: 30px; margin-right: 10px;"></i>
            <h5 class="modal-title" id="scheduledEventModalLabel">Scheduled Event</h5>
          </div>
          <div class="modal-body">
            <ul id="eventDetailsList"></ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" onclick="deleteScheduledEvent()">Delete</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/js/events.js"></script> <!-- Separate JavaScript file for cleaner code -->
</body>

<?php include("footer.php"); ?> <!-- Includes the footer.php file -->

</html>