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
          <div
            class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-xl-4 g-3">
            <div class="col">
              <div class="card shadow-sm" data-item-id="coffee-1">
                <img
                  src="assets/coffee/coffee-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 1" />
                <div class="card-body">
                  <p class="card-text">Americano</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="coffee-2">
                <img
                  src="assets/coffee/coffee-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 2" />
                <div class="card-body">
                  <p class="card-text">Mocha</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">129.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="coffee-3">
                <img
                  src="assets/coffee/coffee-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 3" />
                <div class="card-body">
                  <p class="card-text">Espresso</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">149.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="coffee-4">
                <img
                  src="assets/coffee/coffee-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Coffee 4" />
                <div class="card-body">
                  <p class="card-text">Cappuccino</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">199.99</span>
                    </small>
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
              <div class="card shadow-sm" data-item-id="tea-1">
                <img
                  src="assets/tea/tea-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Tea 1" />
                <div class="card-body">
                  <p class="card-text">Iced Milk Coffee</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="tea-2">
                <img
                  src="assets/tea/tea-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Tea 2" />
                <div class="card-body">
                  <p class="card-text">Iced Milk Boba</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">129.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="tea-3">
                <img
                  src="assets/tea/tea-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Tea 3" />
                <div class="card-body">
                  <p class="card-text">Iced Milk Chocolate</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">149.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="tea-4">
                <img
                  src="assets/tea/tea-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Tea 4" />
                <div class="card-body">
                  <p class="card-text">Iced Milk Matcha</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">199.99</span>
                    </small>
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
              <div class="card shadow-sm" data-item-id="frappe-1">
                <img
                  src="assets/frappe/frappe-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="Frappe 1" />
                <div class="card-body">
                  <p class="card-text">Coffee Frappe</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="frappe-2">
                <img
                  src="assets/frappe/frappe-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="frappe 4" />
                <div class="card-body">
                  <p class="card-text">Caramel Frappe</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">129.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="frappe-3">
                <img
                  src="assets/frappe/frappe-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="frappe 3" />
                <div class="card-body">
                  <p class="card-text">Vanilla Frappe</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">149.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="frappe-4">
                <img
                  src="assets/frappe/frappe-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="frappe 4" />
                <div class="card-body">
                  <p class="card-text">Chocolate Frappe</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">199.99</span>
                    </small>
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
              <div class="card shadow-sm" data-item-id="add-ons-1">
                <img
                  src="assets/add-ons/add-ons-1.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="add-ons 1" />
                <div class="card-body">
                  <p class="card-text">Ice Cream</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="add-ons-2">
                <img
                  src="assets/add-ons/add-ons-2.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="add-ons 2" />
                <div class="card-body">
                  <p class="card-text">Tapioca Pearls</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="add-ons-3">
                <img
                  src="assets/add-ons/add-ons-3.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="add-ons 3" />
                <div class="card-body">
                  <p class="card-text">Syrup</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="add-ons-4">
                <img
                  src="assets/add-ons/add-ons-4.png"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="add-ons 4" />
                <div class="card-body">
                  <p class="card-text">Ice</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">19.99</span>
                    </small>
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
              <div class="card shadow-sm" data-item-id="food-1">
                <img
                  src="assets/food/pinagong.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="food 1" />
                <div class="card-body">
                  <p class="card-text">Pinagong</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="food-2">
                <img
                  src="assets/food/pinoy-bread-biscocho.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="food 2" />
                <div class="card-body">
                  <p class="card-text">Biscocho</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">19.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="food-3">
                <img
                  src="assets/food/pinoy-bread-ensaymada.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="food 3" />
                <div class="card-body">
                  <p class="card-text">Ensaymada</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">99.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" data-item-id="food-4">
                <img
                  src="assets/food/pinoy-bread-pan-de-coco.jpg"
                  class="bd-placeholder-img card-img-top"
                  width="100%"
                  height="225"
                  alt="food 4" />
                <div class="card-body">
                  <p class="card-text">Pan de Coco</p>
                  <div
                    class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-plus">
                        &plus;
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary btn-minus">
                        &minus;
                      </button>
                    </div>
                    <small class="text-muted">
                      <span class="quantity hidden"></span>
                      <span class="price">19.99</span>
                    </small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="cart-icon btn-cart">
            <img src="assets/cart.png" alt="cart" width="20px" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="cart_container">
    <i class="uil uil-times cart_close"></i>
    <h2 style="text-align: center">Your Cart</h2>
    <div class="cart_items" style="margin-left: 10px"></div>
    <p id="cart-total" style="margin-left: 10px">Total: ₱0.00</p>
    <div class="cart_footer">
      <button class="button btn-danger clear-cart">Clear Cart</button>
      <button class="button btn-danger checkout">Checkout</button>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="js/menu.js"></script>
</body>

</html>