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
          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/coffee/coffee-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 1" />
                <div
                  class="card-body d-flex justify-content-between align-items-center">
                  <span class="card-text">Americano</span>
                  <small class="text-muted">&#8369; 190.40</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/coffee/coffee-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 2" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Mocha</span>
                    <small class="text-muted">&#8369; 203.20</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/coffee/coffee-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 3" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Espresso</span>
                    <small class="text-muted">&#8369; 177.60</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/coffee/coffee-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 4" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Cappuccino</span>
                    <small class="text-muted">&#8369; 142.40</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br /><br />
          <div id="tea-section" class="fs-6 menu-title">Tea</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/tea/tea-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 1" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Iced Milk Coffee</span>
                    <small class="text-muted">&#8369; 190.40</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/tea/tea-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 2" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Iced Milk Boba</span>
                    <small class="text-muted">&#8369; 203.20</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/tea/tea-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 3" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Iced Milk Chocolate</span>
                    <small class="text-muted">&#8369; 177.60</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/tea/tea-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 4" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Iced Milk Matcha</span>
                    <small class="text-muted">&#8369; 142.40</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br /><br />
          <div id="frappe-section" class="fs-6 menu-title">Frappe</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/frappe/frappe-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 1" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Coffee Frappe</span>
                    <small class="text-muted">&#8369; 190.40</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/frappe/frappe-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 2" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Caramel Frappe</span>
                    <small class="text-muted">&#8369; 203.20</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/frappe/frappe-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 3" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Vanilla Frappe</span>
                    <small class="text-muted">&#8369; 177.60</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/frappe/frappe-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 4" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Chocolate Frappe</span>
                    <small class="text-muted">&#8369; 142.40</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br /><br />
          <div id="add-ons-section" class="fs-6 menu-title">Add-ons</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/add-ons/add-ons-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 1" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Ice Cream</span>
                    <small class="text-muted">&#8369; 99.99</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/add-ons/add-ons-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 2" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Tapioca Pearls</span>
                    <small class="text-muted">&#8369; 15.15</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/add-ons/add-ons-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 3" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Syrup</span>
                    <small class="text-muted">&#8369; 25.20</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/add-ons/add-ons-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 4" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Ice</span>
                    <small class="text-muted">&#8369; 5.10</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br /><br />
          <div id="food-section" class="fs-6 menu-title">Food</div>
          <hr />

          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/food/pinagong.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 1" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Pinagong</span>
                    <small class="text-muted">&#8369; 35.40</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/food/pinoy-bread-biscocho.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 2" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Biscocho</span>
                    <small class="text-muted">&#8369; 20.20</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/food/pinoy-bread-ensaymada.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 3" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Ensaymada</span>
                    <small class="text-muted">&#8369; 50.60</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <img
                  src="assets/food/pinoy-bread-pan-de-coco.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 4" />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <span class="card-text">Pan de Coco</span>
                    <small class="text-muted">&#8369; 12.40</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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