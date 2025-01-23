<?php
session_start(); 

if (!isset($_SESSION['logged_in'])) {
    header('Location: admin-login.php'); 
    exit();
}

// Retrieve the logged-in admin's email from the session
$email = $_SESSION['user_email']; 

require 'admin-dash-conn.php'; 

// Prepare the SQL query to fetch the admin name
$sql = "SELECT name FROM admin WHERE email = ? LIMIT 1";
$stmt = $conn->prepare($sql);

// Error handling for database preparation
if ($stmt === false) {
    die('Error preparing the SQL statement: ' . $conn->error);
}

$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $adminName = $row['name'];
} else {
    $adminName = "Admin name not found";
}

// Fetch supplies
$sql = "SELECT * FROM supplies";
$suppliesResult = $conn->query($sql);

// Error handling for the query
if ($suppliesResult === false) {
    die('Error fetching supplies data: ' . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/coffee-bean-icon.png" />
    <title>ELI Coffee</title>
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/admin-dashboard.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
<nav class="navbar navbar-expand-md bg-white border-bottom">
    <div class="container-fluid d-flex align-items-center">
        <a class="navbar-brand d-flex align-items-center me-auto" href="#">
            <img src="assets/eli-coffee-icon.png" width="30" class="d-inline-block navbar-icon" />
            <span class="d-none d-md-inline ms-2">ELI Coffee</span>
        </a>
        <div class="dashboard">Dashboard</div>
        <div class="navbar-right d-flex align-items-center me-2">
            <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                <img class="user-icon" src="assets/user-default-icon.png" width="30" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Edit profile</a></li>
                <li><a class="dropdown-item" href="admin-signup.php">Sign out</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <div id="toggle-btn" type="button">
                <i class="lni lni-menu-cheesburger"></i>
            </div>
        </div>
        <div class="admin-info">
            <img class="admin-image" src="assets/user-default-icon.png" alt="" />
            <div class="admin-name"><?php echo htmlspecialchars($adminName); ?></div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="admin-dashboard.php" class="sidebar-link">
                    <i class="lni lni-home-2"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="admin-events/admin-inventory.php" class="sidebar-link">
                    <i class="lni lni-menu-hamburger-1"></i>
                    <span>Menu and Inventory</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="admin-events/admin-events.php" class="sidebar-link">
                    <i class="lni lni-calendar-days"></i>
                    <span>Events</span>
                </a>
            </li>
        </ul>
    </aside>

    <div class="main p-3">
        <div>
            <div class="sale-event-container">
                <main class="col-12 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h2 class="h2">Admin Dashboard</h2>
                    </div>
                    <h2>PRODUCTS SOLD</h2>
                    <canvas id="itemsSoldChart" width="1100px" height="300px"></canvas>
                    <h2>SUPPLIES</h2>
                    <div class="table-responsive small">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Supply</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($suppliesResult->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $suppliesResult->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        echo "<td>" . $row["supply"] . "</td>";
                                        echo "<td>" . $row["quantity"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3'>No data available</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- add button -->
                        <div class="add-menu-container" style="position: fixed; bottom: 10px; right: 10px; z-index: 1000;">
                            <div>
                                <img src="assets/add-square-removebg-preview.png" alt="" class="img-fluid add-menu" id="add-menu" style="height: 50px; width: 50px;"> 
                                <p class="menu-name" style="font-size: 12px; color: #333; right: 40px;">Add Supplies</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
  fetch('fetch_data.php') // Path to the PHP script
  .then(response => response.json())
  .then(data => {
      const productNames = data.map(item => item.product_name); // Extract product names
      const itemsSold = data.map(item => item.sold);           // Extract sold quantities

      // Create the chart
      const ctx = document.getElementById('itemsSoldChart').getContext('2d');
      const itemsSoldChart = new Chart(ctx, {
          type: 'bar', // Use 'line' for a line chart
          data: {
              labels: productNames, // X-axis labels
              datasets: [{
                  label: 'Items Sold',
                  data: itemsSold, // Y-axis data
                  backgroundColor: '#003366', // Bar colors
                  borderColor: '#D3D3D3',       // Border colors
                  borderWidth: 1
              }]
          },
          options: {
              responsive: true,
              plugins: {
                  legend: {
                      display: true
                  }
              },
              scales: {
                  y: {
                      beginAtZero: true
                  }
              },
              backgroundColor: 'rgba(255, 255, 255, 1)'
          }
      });
  })
  .catch(error => console.error('Error fetching data:', error));

  const menu = document.querySelector("#toggle-btn");

  menu.addEventListener("click", function(){
      document.querySelector("#sidebar").classList.toggle("expand");
  });
</script>
</body>
</html>
