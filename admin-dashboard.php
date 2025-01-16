<?php
require 'admin-dash-conn.php';


// Fetch data from the supplies table
$sql = "SELECT * FROM supplies";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    
</head>

<body>
    <nav class="navbar navbar-expand-md bg-white border-bottom">
        <div class="container-fluid d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-auto" href="#">
                <img src="assets/eli-coffee-icon.png" width="30" class="d-inline-block navbar-icon" />
                <span class="d-none d-md-inline">ELI Coffee</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link link-dark" href="#" role="button" data-bs-toggle="dropdown">Menu
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Coffee</a></li>
                            <li><a class="dropdown-item" href="#">Tea</a></li>
                            <li><a class="dropdown-item" href="#">Frappe</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="#">Add-ons</a>
                                <a class="dropdown-item" href="#">Food</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.html">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.html">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-right d-flex align-items-center me-2">
                <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
                    <img class="user-icon" src="assets/user-default-icon.png" width="30" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Order status</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#">Edit profile</a></li>
                    <li><a class="dropdown-item" href="home.html">Sign out</a></li>
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
            <div>
                <div class="sale-event-container">
                    <main class="col-12 px-md-4">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Admin Dashboard</h1>
                        </div>

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
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
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
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="/js/admin-dashboard.js"></script>
</body>
</html>
