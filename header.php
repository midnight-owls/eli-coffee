<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="assets/coffee-bean-icon.png" />
  <title>ELI Coffee</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
    rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/index.css" />
  <!-- <link rel="stylesheet" href="css/about.css"> -->
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
      <a class="navbar-brand mx-auto" href="home.php">
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
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="#"
              role="button"
              data-bs-toggle="dropdown">
              Events
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
              <li><a class="dropdown-item" href="#">Pending requests</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="events.php">Schedule an event</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
        </ul>
      </div>
      <div class="navbar-right ms-auto d-flex align-items-center">
        <a href="user-dashboard.php">
          <button type="button" class="btn btn-outline-secondary">
            Dashboard
          </button>
        </a>
        <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
          <img
            class="user-icon"
            src="assets/user-default-icon.png"
            width="30" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Edit profile</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="index.html">Sign out</a></li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>