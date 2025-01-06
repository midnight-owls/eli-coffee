// Enable Confirm button if all required inputs are filled
const requiredInputs = document.querySelectorAll('#eventForm input[required]');
requiredInputs.forEach(input => {
  input.addEventListener('input', toggleConfirmButton);
});

function toggleConfirmButton() {
  const allFilled = Array.from(requiredInputs).every(input => input.value);
  document.getElementById('confirmButton').disabled = !allFilled;
}

function formatTimeTo12Hour(time) {
  const [hours, minutes] = time.split(":");
  const period = hours >= 12 ? "PM" : "AM";
  const formattedHours = (hours % 12) || 12; // Convert 0 or 12-hour format
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
    comments
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
    events.forEach(event => {
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
    const myModal = new bootstrap.Modal(document.getElementById('scheduledEventModal'));
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
    const confirmDelete = confirm("Are you sure you want to delete the most recent event?");
    if (confirmDelete) {
      // Remove the most recent event (last item in the array)
      events.pop();

      // Save the updated events array back to localStorage
      localStorage.setItem("events", JSON.stringify(events));

      // Hide the modal after deletion
      const myModal = bootstrap.Modal.getInstance(document.getElementById('scheduledEventModal'));
      myModal.hide();

      alert("Most recent event has been deleted.");
    } else {
      alert("Event deletion cancelled.");
    }
  } else {
    alert("No events to delete.");
  }
}
