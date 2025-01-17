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
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet" />

  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="css/guest-events.css" />
  <link rel="stylesheet" href="css/menu.css" />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-white border-bottom rara">
    <div class="container-fluid d-flex align-items-center">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="index.php">
        <img
          src="assets/eli-coffee-icon.png"
          width="30"
          class="d-inline-block navbar-icon" />
        <span class="d-none d-md-inline">ELI Coffee</span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-4">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="guest-menu.php"
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
              <li>
                <a class="dropdown-item" href="guest-menu.php#coffee-section">Coffee</a>
              </li>
              <li>
                <a class="dropdown-item" href="guest-menu.php#tea-section">Tea</a>
              </li>
              <li>
                <a class="dropdown-item" href="guest-menu.php#frappe-section">Frappe</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="guest-menu.php#add-ons-section">Add-ons</a>
                <a class="dropdown-item" href="guest-menu.php#food-section">Food</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guest-events.php" role="button">
              Events
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="guest-about-us.php">About Us</a>
          </li>
        </ul>
      </div>
      <div class="navbar-right d-flex align-items-center me-2">
        <button type="button" class="btn btn-primary btn-sign-in">
          SIGN IN
        </button>
      </div>
    </div>
  </nav>
</body>

</html>