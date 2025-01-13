<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="assets/coffee-bean-icon.png" />
  <title>ELI Coffee</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/home.css" />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-white border-bottom">
    <div class="container-fluid d-flex align-items-center">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="#">
        <img
          src="assets/eli-coffee-icon.png"
          width="30"
          class="d-inline-block d-xxl-none navbar-icon" />
        <span class="d-none d-md-inline">ELI Coffee</span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto justify-content-center">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown">
              Menu
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="bi bi-chevron-down"
                viewBox="0 0 16 16">
                <path
                  fill-rule="evenodd"
                  d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
              </svg>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Coffee</a></li>
              <li><a class="dropdown-item" href="#">Tea</a></li>
              <li><a class="dropdown-item" href="#">Frappe</a></li>
              <li><a class="dropdown-item" href="#">Sparkle series</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Add-ons</a>
                <a class="dropdown-item" href="#">Food</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
        </ul>
      </div>
      <div class="navbar-right ms-auto d-flex align-items-center">
        <a href="#">
          <button
            type="button"
            class="btn btn-outline-secondary rounded-pill me-2 btn-sign-in">
            Sign In
          </button>
        </a>
        <a href="#">
          <button
            type="button"
            class="btn btn-outline-secondary rounded-pill me-2 btn-sign-in">
            Admin
          </button>
        </a>
      </div>
    </div>
  </nav>

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
      <form action="php/signup.php" method="post">
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
        <button class="button" name="signup" type="submit">Signup Now</button>
        <div class="signup">
          Already have an account?
          <a href="#" class="toggle-signup" style="text-decoration: none">Login</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Body Content -->
  <div class="front-page1">
    <img src="assets/guest/guest1.jpg" alt="background-coffee" class="img" />
    <div class="content">
      <h2>“Brewed Perfection, Served with Passion.”</h2>
      <button>Order Now</button>
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

  <script src="js/main.js"></script>
</body>

</html>