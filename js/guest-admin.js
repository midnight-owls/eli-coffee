// Get elements
const adminButton = document.querySelector(".btn-sign-in:nth-of-type(2)"); // Admin button
const adminFormContainer = document.querySelector(".form_container");
const adminSigninForm = document.querySelector(".signin_form");
const adminCloseButton = document.querySelector(".form_close");
const adminPwHideIcons = adminSigninForm.querySelectorAll(".pw_hide");
const adminLoginSubmitButton = adminSigninForm.querySelector(".button"); // "Login Now" button

// Predefined admin credentials (hardcoded for simplicity)
const adminCredentials = [
  { email: "admin@elicoffee.com", password: "admin123" },
  { email: "kobe@gmail.com", password: "kobe" },
];

// Show admin login form when "Admin" button is clicked
adminButton.addEventListener("click", () => {
  adminFormContainer.classList.add("active");
  adminSigninForm.style.display = "block";
});

// Close form when close button is clicked
adminCloseButton.addEventListener("click", () => {
  adminFormContainer.classList.remove("active");
});

// Toggle visibility for sign-in forms
document.querySelectorAll(".toggle-signup").forEach((element) => {
    element.addEventListener("click", (event) => {
      event.preventDefault();
      document.querySelector(".signin_form").classList.toggle("hidden");
      document.querySelector(".signup_form").classList.toggle("hidden");
    });
  });
  

// Toggle password visibility
adminPwHideIcons.forEach((icon) => {
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

// Verify admin credentials on login
adminLoginSubmitButton.addEventListener("click", (e) => {
  e.preventDefault();
  const email = adminSigninForm.querySelector("input[type='email']").value;
  const password = adminSigninForm.querySelector("input[type='password']").value;

  const isValidAdmin = adminCredentials.some(
    (admin) => admin.email === email && admin.password === password
  );

  if (isValidAdmin) {
    alert("Welcome Admin! Redirecting to the admin dashboard...");
    window.location.href = "admin-dashboard.php"; // Redirect to admin dashboard
  } else {
    alert("Invalid admin credentials. Please try again.");
  }
});
