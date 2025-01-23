document.querySelector(".btn-sign-in").addEventListener("click", function () {
  // Show the modal
  document.getElementById("modal").style.display = "block";

  // Show the login form and hide the signup form by default
  toggleForm(false); // false indicates to show the login form
});

document.querySelector(".btn-sign-up").addEventListener("click", function () {
  // Show the modal
  document.getElementById("modal").style.display = "block";
  toggleForm(true);
});

function closeModal() {
  document.getElementById("modal").style.display = "none";
}

function toggleForm(isSignup) {
  const signupForm = document.getElementById("signup-form");
  const loginForm = document.getElementById("login-form");

  if (isSignup) {
    signupForm.style.display = "block";
    loginForm.style.display = "none";
  } else {
    signupForm.style.display = "none";
    loginForm.style.display = "block";
  }
}

// Close the modal when clicking outside of the modal content
window.onclick = function (event) {
  const modal = document.getElementById("modal");
  if (event.target == modal) {
    closeModal();
  }
};

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeModal();
  }
});
