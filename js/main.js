// Get elements
const loginButton = document.querySelector(".btn-sign-in");
const formContainer = document.querySelector(".form_container");
const signinForm = document.querySelector(".signin_form");
const signupForm = document.querySelector(".signup_form");
const closeButton = document.querySelector(".form_close");
const toggleSignupLinks = document.querySelectorAll(".toggle-signup");
const pwHideIcons = document.querySelectorAll(".pw_hide");
const loginSubmitButton = signinForm.querySelector(".button"); // "Login Now" button
const signupSubmitButton = signupForm.querySelector(".button"); // "Signup Now" button

// Show login form when "Log In" button is clicked
loginButton.addEventListener("click", () => {
  formContainer.classList.add("active");
  signinForm.style.display = "block";
  signupForm.style.display = "none";
});

// Close form when close button is clicked
closeButton.addEventListener("click", () => {
  formContainer.classList.remove("active");
});

// Toggle between signin and signup forms
toggleSignupLinks.forEach(link => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    signinForm.style.display = signinForm.style.display === "none" ? "block" : "none";
    signupForm.style.display = signupForm.style.display === "none" ? "block" : "none";
  });
});

// Toggle password visibility
pwHideIcons.forEach(icon => {
  icon.addEventListener("click", () => {
    const passwordField = icon.previousElementSibling;
    if (passwordField.type === "password") {
      passwordField.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    } else {
      passwordField.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});

// Store user details on signup
signupSubmitButton.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent form submission
  const email = signupForm.querySelector("input[type='email']").value;
  const password = signupForm.querySelector("input[type='password']").value;

  if (email && password) {
    localStorage.setItem("userEmail", email);
    localStorage.setItem("userPassword", password);
    alert("Account created! You can now log in.");
    signinForm.style.display = "block";
    signupForm.style.display = "none";
  } else {
    alert("Please fill in both fields to sign up.");
  }
});

// Verify user details on login
loginSubmitButton.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent form submission
  const email = signinForm.querySelector("input[type='email']").value;
  const password = signinForm.querySelector("input[type='password']").value;

  // Get stored user credentials
  const storedEmail = localStorage.getItem("userEmail");
  const storedPassword = localStorage.getItem("userPassword");

  // Check if entered credentials match stored credentials
  if (email === storedEmail && password === storedPassword) {
    window.location.href = "home.html"; // Redirect to home.html
  } else {
    alert("Incorrect email or password. Please try again or sign up.");
  }
});