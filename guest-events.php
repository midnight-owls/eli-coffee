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
    <section class="event-info">
      <div class="event-image"></div>
      <p>
        Event information: What event, date &amp; time, location, and how many
        guests attended
      </p>
    </section>

    <section class="service-details">
      <div class="service">
        <div class="service-image"></div>
        <p>
          Description of the picture, what service is made / another details
        </p>
      </div>
      <div class="service">
        <div class="service-image"></div>
        <p>
          Description of the picture, what service is made / another details
        </p>
      </div>
    </section>

    <section class="staff">
      <div class="staff-member">
        <div class="staff-image"></div>
        <p>Staff Name<br />Position</p>
      </div>
      <div class="staff-member">
        <div class="staff-image"></div>
        <p>Staff Name<br />Position</p>
      </div>
    </section>

    <footer>
      <div class="about">
        <h3>About Us</h3>
        <ul>
          <li><a href="#">Our Company</a></li>
          <li><a href="#">Stories and News</a></li>
          <li><a href="#">Customer Service</a></li>
        </ul>
      </div>
      <div class="contact">
        <h3>Contact Us</h3>
        <p>
          ELI COFFEE<br />
          2nd floor Pearl Building, Binangonan, Philippines<br />
          Phone: 0917 562 0306<br />
          Email: elicoffeetea@gmail.com
        </p>
      </div>
      <div class="hours">
        <h3>Opening Hours</h3>
        <ul>
          <li>Monday: 7:00 am - 5:00 pm</li>
          <li>Tuesday: 7:00 am - 5:00 pm</li>
          <li>Wednesday: 7:00 am - 5:00 pm</li>
          <li>Thursday: 7:00 am - 5:00 pm</li>
          <li>Friday: 7:00 am - 5:00 pm</li>
          <li>Saturday: 8:00 am - 2:00 pm</li>
          <li>Sunday: Closed</li>
        </ul>
      </div>
    </footer>
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

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>