const coffee_name = document.getElementById("coffee-1");
const view_btn = document.getElementById("view-btn-coffee-1");
const edit_btn = document.getElementById("edit-btn-coffee-1");
const item = document.querySelector('#add-menu');
const addMenu = document.getElementById("add-menu");
const modal = document.getElementById("popup-modal-add-coffee");
const closeButton = document.querySelector(".close-button");

const popup_form = document.getElementById("popup-form");
const coffee_details = document.getElementById("coffee-details");
const close_button = document.querySelector(".x-btn-view");

// Ensure the popup form is hidden on page load
window.onload = function () {
    popup_form.style.display = "none";
};

// Show popup form when "View" button is clicked
view_btn.onclick = function () {
    coffee_details.textContent = coffee_name.textContent; // Set coffee details
    popup_form.style.display = "flex"; // Show the popup
};

// Close the popup when the close button is clicked
close_button.onclick = function () {
    popup_form.style.display = "none"; // Hide the popup
};

// Optional: Close the popup when clicking outside the popup content
window.onclick = function (event) {
    if (event.target === popup_form) {
        popup_form.style.display = "none"; // Hide the popup
    }
};

edit_btn.onclick = function() {
    window.alert(coffee_name.textContent);
};

/* Add button */
item.addEventListener('mouseover', function(e) {
    if(item) item.classList.add('add-menu');
});

item.addEventListener('animationend', function(e) {
    if(item) item.classList.remove('add-menu');
});

// Show the modal when the image is clicked
addMenu.addEventListener("click", function () {
    modal.style.display = "flex";
});

// Hide the modal when the close button is clicked
closeButton.addEventListener("click", function () {
    modal.style.display = "none";
});

// Optional: Hide the modal when clicking outside the modal content
window.addEventListener("click", function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
