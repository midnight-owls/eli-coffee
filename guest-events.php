<?php include("guest-header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="assets/coffee-bean-icon.png" />
  <title>ELI Coffee</title>
</head>

<body>

  <main>
    <section class="event-info top-half">
      <div class="event-image d-flex justify-content-center align-items-center">
        <img
          src="assets/events/events-3.jpg"
          class="img-fluid d-block my-2 preview-2 rounded-start"
          alt="Event" />
        <img
          src="assets/events/events-1.jpg"
          class="img-fluid d-block my-2 preview-2"
          alt="Event" />
        <img
          src="assets/events/events-2.jpg"
          class="img-fluid d-block my-2 preview-2 rounded-end"
          alt="Event" />
      </div>
      <h6 class="text-end me-2 caption">
        <strong>ELI Coffee:</strong> No tricks, just coffee treats for you. ☕
      </h6>
    </section>

    <section class="event-info bottom-half">
      <div class="event-image d-flex justify-content-center align-items-center">
        <img
          src="assets/events/events-6.jpg"
          class="img-fluid d-block my-2 preview-2 rounded-start"
          alt="Event" />
        <img
          src="assets/events/events-5.jpg"
          class="img-fluid d-block my-2 preview-2"
          alt="Event" />
        <img
          src="assets/events/events-4.jpg"
          class="img-fluid d-block my-2 preview-2 rounded-end"
          alt="Event" />
      </div>
      <h6 class="text-end me-2 caption">
        <strong>ELI Coffee:</strong> It's spooky szn, of course we're joining! 👻🎃
      </h6>
    </section>
  </main>

  <div class="form_container">
    <i class="uil uil-times form_close"></i>

    <!-- Sign In Form -->
    <div class="signin_form">
      <form action="#">
        <h2>Welcome Back!</h2>
        <div class="input_box">
          <input type="email" placeholder="Enter your email" required />
          <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
          <input type="password" placeholder="Enter your password" required />
          <i class="fas fa-eye-slash pw_hide me-1"></i>
        </div>
        <div class="option_field">
          <span class="checkbox" style="cursor: pointer">
            <input type="checkbox" id="check" style="cursor: pointer" />
            <label for="check" style="cursor: pointer"> Remember me</label>
          </span>
        </div>
        <div class="forgot-container">
          <a href="#" class="forgot_pw">Forgot password</a>
        </div>
        <button class="button">Sign In</button>
        <div class="signup">
          Don't have an account?
          <a href="#" class="toggle-signup">Sign up</a>
        </div>
      </form>
    </div>

    <!-- Signup Form -->
    <div class="signup_form">
      <form action="#">
        <h2>Create An Account</h2>
        <div class="input_box">
          <input type="email" placeholder="Enter your email" required />
          <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
          <input type="password" placeholder="Enter your password" required />
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>
        <button class="button">Sign Up</button>
        <div class="signup">
          Already have an account?
          <a href="#" class="toggle-signup">Sign in</a>
        </div>
      </form>
    </div>
  </div>

  <footer class="bg-dark text-light py-4 footer d-flex align-items-center">
    <div class="container">
      <div class="text-start ps-0">
        &copy; 2025 Eli Coffee. All rights reserved.
      </div>
    </div>
    <div class="container mx-auto d-flex justify-content-end gap-2">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating" href="https://www.facebook.com/elicoffeeph" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating" href="https://www.instagram.com/elicoffeeph/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>