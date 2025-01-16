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
            Forgot password</a
          >
          <button class="button">Login Now</button>
          <div class="signup">
            Don't have an account?
            <a href="#" class="toggle-signup" style="text-decoration: none"
              >Signup</a
            >
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
              required
            />
            <i class="uil uil-envelope"></i>
          </div>
          <div class="input_box">
            <input
              type="password"
              name="password"
              placeholder="Create your password"
              required
            />
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <div class="input_box">
            <input
              type="password"
              name="confirm_password"
              placeholder="Confirm password"
              required
            />
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>
          <button class="button" type="submit" name="signup">Signup Now</button>
          <div class="signup">
            Already have an account?
            <a href="#" class="toggle-signup" style="text-decoration: none"
              >Login</a
            >
          </div>
        </form>
      </div>
    </div>

    <!-- Body Content -->
    <div class="front-page1 d-flex">
      <img src="assets/guest/guest1.jpg" alt="background-coffee" class="img" />
      <div class="content ms-5">
        <h2>“Brewed Perfection, Served with Passion.”</h2>
        <button class="ms-1">Order Now</button>
      </div>
    </div>

    <h1>OUR COFFEE</h1>
    <p>
      "We’ve carefully selected rich, flavorful tastes from around the world."
    </p>

    <div class="front-page2">
      <img src="assets/guest/guest2.jpg" alt="coffee" />
      <img src="assets/guest/guest3.jpg" alt="wedding-events" />
      <h2>COME VISIT US</h2>
      <img src="assets/guest/guest4.jpg" alt="birthday-events" />
      <img src="assets/guest/guest5.jpg" alt="chicken-food" />
    </div>

    <footer>
      <div class="about-us">
        <h2>About Us</h2>
        <p>Our Company</p>
        <p>Stories and News</p>
        <p>Customer Service</p>
      </div>

      <div class="contact-us">
        <h2>Contact Us</h2>
        <p><strong>Eli Coffee</strong></p>
        <p>2nd floor Pearl Building, Binangonan, Philippines</p>
        <p><strong>Phone:</strong> 0917 562 0306</p>
        <p><strong>Email:</strong> elicoffeetea@gmail.com</p>
      </div>

      <div class="opening-hours">
        <h2>Opening Hours</h2>
        <br />
        <p><strong>Monday</strong> 7:00 am - 5 pm</p>
        <p><strong>Tuesday</strong> 7:00 am - 5 pm</p>
        <p><strong>Wednesday</strong> 7:00 am - 5 pm</p>
        <p><strong>Thursday</strong> 7:00 am - 5 pm</p>
        <br />
        <p><strong>Friday</strong> 7:00 am - 5 pm</p>
        <br />
        <p><strong>Saturday</strong> 8:00 am - 2 pm</p>
        <br />
        <p><strong>Sunday</strong> CLOSED</p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="js/main.js"></script>
  </body>
</html>
