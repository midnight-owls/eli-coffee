<?php include("user-header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar">
      <div class="d-flex">
        <div id="toggle-btn" type="button">
          <i class="lni lni-menu-cheesburger"></i>
        </div>
      </div>
      <div class="admin-info">
        <img class="admin-image" src="assets/user-default-icon.png" alt="" />
        <div class="admin-name">Admin name</div>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-item">
          <a href="admin-dashboard.php" class="sidebar-link">
            <i class="lni lni-home-2"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="inventory.php" class="sidebar-link">
            <i class="lni lni-menu-hamburger-1"></i>
            <span>Menu and Inventory</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="admin-events.php" class="sidebar-link">
            <i class="lni lni-calendar-days"></i>
            <span>Events and orders</span>
          </a>
        </li>
      </ul>
      <div class="sidebar-footer">
        <a href="home.php" class="sidebar-link">
          <i class="lni lni-exit"></i>
          <span>Logout</span>
        </a>
      </div>
    </aside>
    <div class="main">
      <div class="text-center">
        <h1>Menu and Inventory</h1>
        <div class="coffee-products">
          <!-- Coffee 1-->
          <div class="col">
            <div class="card">
              <div class="placeholder">
                <img src="assets/coffee1.png" alt="picture of a coffee" class="img-fluid" />
              </div>
              <div class="card-body">
                <p class="card-text" id="coffee-1">Americano</p>
                <button class="btn btn-primary" id="view-btn-coffee-1">
                  View
                </button>
                <button class="ediButton btn btn-secondary" id="edit-btn-coffee-1">
                  Edit
                </button>
              </div>
            </div>
          </div>

          <!--   Coffee 2 -->
          <div class="col">
            <div class="card">
              <div class="placeholder">
                <img src="assets/coffee2.png" alt="picture of a coffee" class="img-fluid" />
              </div>
              <div class="card-body">
                <p class="card-text">Mocha</p>
                <a href="#" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-secondary">Edit</a>
              </div>
            </div>
          </div>

          <!-- Coffee 3 -->
          <div class="col">
            <div class="card">
              <div class="placeholder">
                <img src="assets/coffee3.png" alt="picture of a coffee" class="img-fluid" />
              </div>
              <div class="card-body">
                <p class="card-text">Espresso</p>
                <a href="#" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-secondary">Edit</a>
              </div>
            </div>
          </div>

          <!-- Coffee 4 -->
          <div class="col">
            <div class="card">
              <div class="placeholder">
                <img src="assets/coffee4.png" alt="picture of a coffee" class="img-fluid" />
              </div>
              <div class="card-body">
                <p class="card-text">Capuccino</p>
                <a href="#" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-secondary">Edit</a>
              </div>
            </div>
          </div>

          <!-- Coffee 5 -->
          <div class="col">
            <div class="card">
              <div class="placeholder">
                <img src="assets/coffee5.png" alt="picture of a coffee" class="img-fluid" />
              </div>
              <div class="card-body">
                <p class="card-text">Latte</p>
                <a href="#" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-secondary">Edit</a>
              </div>
            </div>
          </div>
          <!-- add button -->
          <div class="add-menu-container">
            <div>
              <img src="assets/add-square-removebg-preview.png" alt="" class="img-fluid add-menu" id="add-menu" />
              <div class="card-body">
                <p class="card-text">Add Coffee</p>
              </div>
            </div>
          </div>
          <div id="popup-modal-add-coffee" class="modal-add-coffee">
            <div class="modal-content">
              <span class="close-button">&times;</span>
              <form>
                <div class="coffee-information">
                  <label for="coffee-name">Name of Coffee</label>
                  <input type="text" name="coffee-name" id="coffee-name" />
                </div>
                <br />
                <div class="ingredients-container">
                  <label>Ingredients needed: </label> <br />
                  <!-- checkboxes -->
                  <input type="checkbox" id="coffee" />
                  <label for="coffee">Coffee</label>
                  <input type="checkbox" id="sugar" />
                  <label for="sugar">sugar</label>
                  <input type="checkbox" id="creamer" />
                  <label for="creamer">creamer</label>
                </div>

                <label></label>
                <label></label>
              </form>
            </div>
          </div>
          <!-- view button -->
          <div id="popup-form" class="popup-form">
            <div class="popup-content">
              <span class="x-btn-view">&times;</span>
              <div class="details">
                <h3>View Coffee Details</h3>
                <div class="picture-container">
                  <img src="assets/coffee1.png" alt="Mocha" />
                </div>
                <p id="coffee-details"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="/js/admin-dashboard.js"></script>
  <script src="js/inventory.js"></script>
</body>

</html>