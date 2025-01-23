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

    <!-- Bottom Half -->
    <div
      class="row flex-fill d-flex align-items-center justify-content-center mt-2 bottom-half">
      <div
        class="col-md-6 text-center d-flex flex-column justify-content-center mt-4 mt-md-5">
        <h2 class="text-start align-self-center">
          Order on the go, from anywhere,<br />with our mobile app
        </h2>
        <div class="d-flex justify-content-center mt-3">
          <a href="#"><img
              src="assets/google-play.png"
              class="img-fluid me-3 btn-download"
              alt="Google Play" /></a>
          <a href="#"><img
              src="assets/app-store.png"
              class="img-fluid me-3 btn-download"
              alt="App Store" /></a>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-center align-items-center">
        <img
          src="assets/mobile-ordering.png"
          class="img-fluid rounded mx-auto d-block my-2 preview-2"
          id="app-app1"
          alt="Coffee" />
      </div>
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
</body>

</html>