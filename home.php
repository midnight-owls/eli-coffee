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
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/home.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-md bg-white border-bottom">
      <div class="container-fluid d-flex align-items-center">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto">
          <img
            src="assets/eli-coffee-icon.png"
            width="30"
            class="d-inline-block navbar-icon"
          />
          <span class="d-none d-md-inline">ELI Coffee</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto me-4">
            <li class="nav-item dropdown">
              <a
                class="nav-link link-dark"
                href="menu.php"
                role="button"
                data-bs-toggle="dropdown"
              >
                Menu
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="bi bi-chevron-down"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="menu.php#coffee-section"
                    >Coffee</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="menu.php#tea-section">Tea</a>
                </li>
                <li>
                  <a class="dropdown-item" href="menu.php#frappe-section"
                    >Frappe</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="menu.php#add-ons-section"
                    >Add-ons</a
                  >
                  <a class="dropdown-item" href="menu.php#food-section"
                    >Food</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.php" role="button"> Events </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
          </ul>
        </div>
        <div class="navbar-right d-flex align-items-center me-2">
          <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
            <img
              class="user-icon"
              src="assets/user-default-icon.png"
              width="30"
            />
          </a>
          <ul class="dropdown-menu dropdown-menu-end"> 
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="#">Edit profile</a></li>
            <li><a class="dropdown-item" href="index.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Home Page Content -->

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
  </body>
</html>