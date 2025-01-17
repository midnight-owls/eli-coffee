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
  <!-- Home Page Content -->

  <!-- Login Form Container-->
  <div class="form_container">
    <i class="uil uil-times form_close"></i>

    <!-- Sign In Form Customer-->
    <div class="signin_form">
      <form action="#">
        <h2>Sign In</h2>
        <div class="input_box">
          <input type="email" placeholder="Enter your email" required />
          <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
          <input type="password" placeholder="Enter your password" required />
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>
        <div class="option_field">
          <span class="checkbox">
            <input type="checkbox" id="check" />
            <label for="check"> Remember me</label>
          </span>
        </div>
        <a href="#" class="forgot_pw" style="text-decoration: none">
          Forgot password</a>
        <button class="button">Login Now</button>
        <div class="signup">
          Don't have an account?
          <a href="#" class="toggle-signup" style="text-decoration: none">Signup</a>
        </div>
      </form>
    </div>

    <!-- Signup Form Customer -->
    <div class="signup_form">
      <form action="#" method="">
        <h2>Signup</h2>
        <div class="input_box">
          <input
            type="email"
            name="email"
            placeholder="Enter your email"
            required />
          <i class="uil uil-envelope"></i>
        </div>
        <div class="input_box">
          <input
            type="password"
            name="password"
            placeholder="Create your password"
            required />
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>
        <div class="input_box">
          <input
            type="password"
            name="confirm_password"
            placeholder="Confirm password"
            required />
          <i class="uil uil-eye-slash pw_hide"></i>
        </div>
        <button class="button" type="submit" name="signup">Signup Now</button>
        <div class="signup">
          Already have an account?
          <a href="#" class="toggle-signup" style="text-decoration: none">Login</a>
        </div>
      </form>
    </div>
  </div>

  <div class="container-fluid d-flex flex-column vh-100">
    <!-- Top Half -->
    <div
      class="row flex-fill d-flex align-items-center justify-content-center top-half">
      <div
        class="col-md-6 text-center d-flex flex-column justify-content-center mt-4 mt-md-5">
        <h1 class="text-start align-self-center">
          Ground with passion,<br />brewed with love
        </h1>
        <a
          href="guest-menu.php"
          class="btn btn-primary rounded-pill mt-4 order-now align-self-center">Order Now</a>
      </div>

      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <img
          src="assets/three-cups.jpg"
          class="img-fluid rounded mx-auto d-block preview-1"
          alt="Coffee"
          id="app-app" />
      </div>
    </div>
  </div>

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
  </section>

  <footer class="bg-dark text-light py-4 footer">
    <div class="container">
      <div class="row">
        <!-- Contact Us -->
        <div class="col-md-4">
          <h6>Contact Us</h6>
          <p><strong>Eli Coffee</strong></p>
          <p>2nd Floor Pearl Building, Binangonan, Philippines</p>
          <p><strong>Phone:</strong> 0917 562 0306</p>
          <p><strong>Email:</strong> <a href="mailto:elicoffeetea@gmail.com" class="text-light text-decoration-none">elicoffeetea@gmail.com</a></p>
        </div>

        <!-- About Us -->
        <div class="col-md-4 text-center">
          <h6>About Us</h6>
          <ul class="list-unstyled">
            <li><a href="#" class="text-light text-decoration-none">Our Company</a></li>
            <li><a href="#" class="text-light text-decoration-none">Stories and News</a></li>
            <li><a href="#" class="text-light text-decoration-none">Customer Service</a></li>
          </ul>
        </div>

        <!-- Opening Hours -->
        <div class="col-md-4 text-end">
          <h6>Opening Hours</h6>
          <ul class="list-unstyled">
            <li><strong>Monday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Tuesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Wednesday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Thursday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Friday:</strong> 7:00 am - 5:00 pm</li>
            <li><strong>Saturday:</strong> 8:00 am - 2:00 pm</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <p class="mb-0">&copy; 2025 Eli Coffee. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>