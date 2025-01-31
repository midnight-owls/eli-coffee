<?php include("guest-header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="assets/coffee-bean-icon.png" />
  <title>ELI Coffee</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div
        class="col-md-2 col-lg-2 d-flex flex-column flex-shrink-0 p-3 bg-light sidebar">
        <a
          href="#"
          class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none ms-3">
          <span class="fs-4 menu-title">Menu</span>
        </a>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#coffee-section" class="nav-link link-dark"> Coffee </a>
          </li>
          <li>
            <a href="#tea-section" class="nav-link link-dark"> Tea </a>
          </li>
          <li>
            <a href="#frappe-section" class="nav-link link-dark"> Frappe </a>
          </li>
          <hr />
          <li>
            <a href="#add-ons-section" class="nav-link link-dark">
              Add-ons
            </a>
          </li>
          <li>
            <a href="#food-section" class="nav-link link-dark"> Food </a>
          </li>
        </ul>
        <hr />
      </div>

      <div class="col-md-10 col-lg-10 album py-5 bg-light">
        <div class="container">
          <div id="coffee-section" class="fs-6 menu-title">Coffee</div>
          <hr />
          <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php';

            // Query to fetch coffee products
            $query = "SELECT * FROM products WHERE category='coffee'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                /* $productImage = $row['product_img']; // Image filename from database */
                $productName = $row['product_name']; // Coffee name from database
                $productPrice = $row['price']; // Coffee price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Display the product image dynamically -->
                    <img
                      src="img/<?php echo $row['product_img']; ?>"
                      class="bd-placeholder-img card-img-top"
                      width="100%"
                      height="225"
                      alt="Picture of <?php echo $productName; ?>" />
                    <img src="" alt="">


                    <div class="card-body d-flex justify-content-between align-items-center">
                      <!-- Display the product name and price dynamically -->
                      <span class="card-text"><?php echo $productName; ?></span>
                      <small class="text-muted">&#8369; <?php echo number_format($productPrice, 2); ?></small>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No products available.</p>";
            }
            ?>
          </div>

          <br /><br />
          <div id="tea-section" class="fs-6 menu-title">Tea</div>
          <hr />

          <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php';

            // Query to fetch coffee products
            $query = "SELECT * FROM products WHERE category='tea'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                /* $productImage = $row['product_img']; // Image filename from database */
                $productName = $row['product_name']; // Coffee name from database
                $productPrice = $row['price']; // Coffee price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Display the product image dynamically -->
                    <img
                      src="img/<?php echo $row['product_img']; ?>"
                      class="bd-placeholder-img card-img-top"
                      width="100%"
                      height="225"
                      alt="Picture of <?php echo $productName; ?>" />
                    <img src="" alt="">


                    <div class="card-body d-flex justify-content-between align-items-center">
                      <!-- Display the product name and price dynamically -->
                      <span class="card-text"><?php echo $productName; ?></span>
                      <small class="text-muted">&#8369; <?php echo number_format($productPrice, 2); ?></small>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No products available.</p>";
            }
            ?>
          </div>

          <br /><br />
          <div id="frappe-section" class="fs-6 menu-title">Frappe</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php';

            // Query to fetch coffee products
            $query = "SELECT * FROM products WHERE category='frappe'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                /* $productImage = $row['product_img']; // Image filename from database */
                $productName = $row['product_name']; // Coffee name from database
                $productPrice = $row['price']; // Coffee price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Display the product image dynamically -->
                    <img
                      src="img/<?php echo $row['product_img']; ?>"
                      class="bd-placeholder-img card-img-top"
                      width="100%"
                      height="225"
                      alt="Picture of <?php echo $productName; ?>" />
                    <img src="" alt="">


                    <div class="card-body d-flex justify-content-between align-items-center">
                      <!-- Display the product name and price dynamically -->
                      <span class="card-text"><?php echo $productName; ?></span>
                      <small class="text-muted">&#8369; <?php echo number_format($productPrice, 2); ?></small>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No products available.</p>";
            }
            ?>
          </div>

          <br /><br />
          <div id="add-ons-section" class="fs-6 menu-title">Add-ons</div>
          <hr />
          <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php';

            // Query to fetch coffee products
            $query = "SELECT * FROM products WHERE category='add-ons'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                /* $productImage = $row['product_img']; // Image filename from database */
                $productName = $row['product_name']; // Coffee name from database
                $productPrice = $row['price']; // Coffee price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Display the product image dynamically -->
                    <img
                      src="img/<?php echo $row['product_img']; ?>"
                      class="bd-placeholder-img card-img-top"
                      width="100%"
                      height="225"
                      alt="Picture of <?php echo $productName; ?>" />
                    <img src="" alt="">


                    <div class="card-body d-flex justify-content-between align-items-center">
                      <!-- Display the product name and price dynamically -->
                      <span class="card-text"><?php echo $productName; ?></span>
                      <small class="text-muted">&#8369; <?php echo number_format($productPrice, 2); ?></small>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No products available.</p>";
            }
            ?>
          </div>

          <br /><br />
          <div id="food-section" class="fs-6 menu-title">Food</div>
          <hr />

          <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php';

            // Query to fetch coffee products
            $query = "SELECT * FROM products WHERE category='food'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                /* $productImage = $row['product_img']; // Image filename from database */
                $productName = $row['product_name']; // Coffee name from database
                $productPrice = $row['price']; // Coffee price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <!-- Display the product image dynamically -->
                    <img
                      src="img/<?php echo $row['product_img']; ?>"
                      class="bd-placeholder-img card-img-top"
                      width="100%"
                      height="225"
                      alt="Picture of <?php echo $productName; ?>" />
                    <img src="" alt="">


                    <div class="card-body d-flex justify-content-between align-items-center">
                      <!-- Display the product name and price dynamically -->
                      <span class="card-text"><?php echo $productName; ?></span>
                      <small class="text-muted">&#8369; <?php echo number_format($productPrice, 2); ?></small>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No products available.</p>";
            }
            ?>
          </div>
        </div>
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