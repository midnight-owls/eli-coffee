<?php include("user-header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <!-- content of the page -->
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
            <span>Events</span>
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
    <div class="main p-3">
      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="calendar border p-3">
          <div class="header">
            <button id="prevBtn">
              <i class="fa-solid fa-chevron-left"></i>
            </button>
            <div class="monthYear" id="monthYear"></div>
            <button id="nextBtn">
              <i class="fa-solid fa-chevron-right"></i>
            </button>
          </div>
          <div class="days">
            <div class="day">Sun</div>
            <div class="day">Mon</div>
            <div class="day">Tue</div>
            <div class="day">Wed</div>
            <div class="day">Thu</div>
            <div class="day">Fri</div>
            <div class="day">Sat</div>
          </div>
          <div class="dates" id="dates"></div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="notes-section">
          <h5>Events Note</h5>
          <textarea
            id="notesTextArea"
            class="form-control"
            rows="15"
            placeholder="Click a date to add a note..."></textarea>
        </div>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src="/js/admin-dashboard.js"></script>
  <script src="js/events.js"></script>
</body>

</html>