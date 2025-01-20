document.addEventListener("DOMContentLoaded", function () {
  // Get elements
  const btnSignUp = document.querySelector(".btn-sign-up"); // Sign Up button
  const btnSignIn = document.querySelector(".btn-sign-in"); // Log In button
  const loginForm = document.querySelector("form:nth-of-type(2)"); // Log In form
  const registerForm = document.querySelector("form:nth-of-type(1)"); // Sign Up form

  // Initially hide both forms
  loginForm.style.display = "none";
  registerForm.style.display = "none";

  // Sign Up Button Click Event
  btnSignUp.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default link behavior
    registerForm.style.display = "block"; // Show the Sign Up form
    loginForm.style.display = "none"; // Hide the Log In form
  });

  // Log In Button Click Event
  btnSignIn.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default link behavior
    loginForm.style.display = "block"; // Show the Log In form
    registerForm.style.display = "none"; // Hide the Sign Up form
  });

  // Optional: Add functionality to close forms (if needed)
  const closeButtons = document.querySelectorAll(".form_close"); // If you have close buttons
  closeButtons.forEach((closeButton) => {
    closeButton.addEventListener("click", function () {
      loginForm.style.display = "none"; // Hide Log In form
      registerForm.style.display = "none"; // Hide Sign Up form
    });
  });
});