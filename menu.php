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
            require 'guest-connection.php'; // Database connection

            // Query to fetch coffee products from the database
            $query = "SELECT product_img, product_name, price FROM products WHERE category = 'Coffee'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                $productImage = $row['product_img']; // Image filename from database
                $productName = $row['product_name']; // Product name from database
                $price = $row['price']; // Price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm" data-item-id="<?php echo $productName; ?>">
                    <img src="img/<?php echo $productImage; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="<?php echo $productName; ?>" />
                    <div class="card-body">
                      <p class="card-text"><?php echo $productName; ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-plus"> &plus; </button>
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-minus"> &minus; </button>
                        </div>
                        <small class="text-muted">
                          <span class="quantity hidden"></span>
                          <span class="price" data-price="<?php echo $price; ?>"><?php echo number_format($price, 2); ?></span>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No coffee products available.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>

          </div>

          <br /><br />
          <div id="tea-section" class="fs-6 menu-title">Tea</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php'; // Database connection

            // Query to fetch coffee products from the database
            $query = "SELECT product_img, product_name, price FROM products WHERE category = 'tea'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                $productImage = $row['product_img']; // Image filename from database
                $productName = $row['product_name']; // Product name from database
                $price = $row['price']; // Price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm" data-item-id="<?php echo $productName; ?>">
                    <img src="img/<?php echo $productImage; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="<?php echo $productName; ?>" />
                    <div class="card-body">
                      <p class="card-text"><?php echo $productName; ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-plus"> &plus; </button>
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-minus"> &minus; </button>
                        </div>
                        <small class="text-muted">
                          <span class="quantity hidden"></span>
                          <span class="price" data-price="<?php echo $price; ?>"><?php echo number_format($price, 2); ?></span>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No coffee products available.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
          </div>

          <br /><br />
          <div id="frappe-section" class="fs-6 menu-title">Frappe</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php'; // Database connection

            // Query to fetch coffee products from the database
            $query = "SELECT product_img, product_name, price FROM products WHERE category = 'frappe'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                $productImage = $row['product_img']; // Image filename from database
                $productName = $row['product_name']; // Product name from database
                $price = $row['price']; // Price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm" data-item-id="<?php echo $productName; ?>">
                    <img src="img/<?php echo $productImage; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="<?php echo $productName; ?>" />
                    <div class="card-body">
                      <p class="card-text"><?php echo $productName; ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-plus"> &plus; </button>
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-minus"> &minus; </button>
                        </div>
                        <small class="text-muted">
                          <span class="quantity hidden"></span>
                          <span class="price" data-price="<?php echo $price; ?>"><?php echo number_format($price, 2); ?></span>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No coffee products available.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
          </div>

          <br /><br />
          <div id="add-ons-section" class="fs-6 menu-title">Add-ons</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php'; // Database connection

            // Query to fetch coffee products from the database
            $query = "SELECT product_img, product_name, price FROM products WHERE category = 'add-ons'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                $productImage = $row['product_img']; // Image filename from database
                $productName = $row['product_name']; // Product name from database
                $price = $row['price']; // Price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm" data-item-id="<?php echo $productName; ?>">
                    <img src="img/<?php echo $productImage; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="<?php echo $productName; ?>" />
                    <div class="card-body">
                      <p class="card-text"><?php echo $productName; ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-plus"> &plus; </button>
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-minus"> &minus; </button>
                        </div>
                        <small class="text-muted">
                          <span class="quantity hidden"></span>
                          <span class="price" data-price="<?php echo $price; ?>"><?php echo number_format($price, 2); ?></span>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No coffee products available.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
          </div>

          <br /><br />
          <div id="food-section" class="fs-6 menu-title">Food</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <?php
            require 'guest-connection.php'; // Database connection

            // Query to fetch coffee products from the database
            $query = "SELECT product_img, product_name, price FROM products WHERE category = 'food'";
            $result = mysqli_query($conn, $query);

            // Check if any products exist
            if (mysqli_num_rows($result) > 0) {
              // Loop through each product and display it
              while ($row = mysqli_fetch_assoc($result)) {
                $productImage = $row['product_img']; // Image filename from database
                $productName = $row['product_name']; // Product name from database
                $price = $row['price']; // Price from database
            ?>
                <div class="col">
                  <div class="card shadow-sm" data-item-id="<?php echo $productName; ?>">
                    <img src="img/<?php echo $productImage; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="<?php echo $productName; ?>" />
                    <div class="card-body">
                      <p class="card-text"><?php echo $productName; ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-plus"> &plus; </button>
                          <button type="button" class="btn btn-sm btn-outline-secondary btn-minus"> &minus; </button>
                        </div>
                        <small class="text-muted">
                          <span class="quantity hidden"></span>
                          <span class="price" data-price="<?php echo $price; ?>"><?php echo number_format($price, 2); ?></span>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "<p>No coffee products available.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
          </div>

          <div class="cart-icon btn-cart">
            <img src="assets/cart.png" alt="cart" width="20px" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cart_container">
    <button class="btn btn-close cart_close"></button>
    <h2 style="text-align: center">Your Cart</h2>
    <div class="cart_items" style="margin-left: 10px" id="cart_items">

    </div>
    <p id="cart-total" style="margin-left: 10px">Total: ₱0.00</p>
    <div class="cart_footer">
      <button class="button btn-danger clear-cart">Clear Cart</button>
      <button class="button btn-danger checkout">Checkout</button>
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
  <script src="js/menu.js"></script>

</body>

</html>