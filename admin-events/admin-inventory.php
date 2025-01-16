<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin-dashboard.css">
    <link rel="stylesheet" href="../css/inventory.css">
    <style>
        
.modal-add-coffee {
    display: none; 
    position: fixed; 
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4); 
    z-index: 1000; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
}

.modal-content {
    background-color: #fefefe;
    padding: 20px;
    border: 1px solid #888;
    width: 50%; 
    max-width: 600px; 
    box-sizing: border-box; 
}

.close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close-button:hover,
.close-button:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-white border-bottom">
        <div class="container-fluid d-flex align-items-center">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand mx-auto" href="#">
            <img
              src="../assets/eli-coffee-icon.png"
              width="30"
              class="d-inline-block navbar-icon"
            />
            <span class="d-none d-md-inline">ELI Coffee</span>
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-4">
              <li class="nav-item dropdown">
                <a
                  class="nav-link link-dark"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                >
                  Menu
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="bi bi-chevron-down"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                    />
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
                <a class="nav-link" href="about.html">About Us</a>
              </li>
            </ul>
          </div>
          <div class="navbar-right d-flex align-items-center me-2">
            <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown">
              <img
                class="user-icon"
                src="../assets/user-default-icon.png"
                width="30"
              />
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
        
    </div>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <div id="toggle-btn" type="button"><i class="lni lni-menu-cheesburger"></i></div>
            </div>
            <div class="admin-info">
                <img class="admin-image" src="../assets/user-default-icon.png" alt="">
                <div class="admin-name">Admin name</div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="admin-dashboard.html" class="sidebar-link">
                        <i class="lni lni-home-2"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin-inventory.php" class="sidebar-link">
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
                <a href="home.html" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <div class="text-center">
                <h1>Menu and Inventory</h1>
                <div class="coffee-products">
                    <!-- logic for obtaining the product/s in databse -->
                    <?php
                    require 'admin-connection.php';

                    // Query to fetch coffee products
                    $query = "SELECT * FROM products";
                    $result = mysqli_query($conn, $query);

                    
                    // Check if any products exist
                    if (mysqli_num_rows($result) > 0) {
                        // Loop through each product and display it
                        while ($row = mysqli_fetch_assoc($result)) {
                            $productImage = $row['product_img']; // Image filename from database
                            $productName = $row['product_name']; // Coffee name from database
                            ?>
                            <div class="col">
                                <div class="card">
                                    <div class="placeholder">
                                        <!-- Display the product image dynamically -->
                                        <img src="../img/<?php echo $productImage; ?>" alt="picture of <?php echo $productName; ?>" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <!-- Display the product name dynamically -->
                                        <p class="card-text"><?php echo $productName; ?></p>
                                        <!-- View and Edit buttons -->
                                        <button class="btn btn-primary" id="view-btn-<?php echo $row['id']; ?>">View</button>
                                        <button class="ediButton btn btn-secondary" id="edit-btn-<?php echo $row['id']; ?>">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>


                    
                    <!-- add button -->
                    <div class="add-menu-container">
                        <div>
                            <img src="../assets/add-square-removebg-preview.png" alt="" class="img-fluid add-menu" id="add-menu"> 
                            <div class="card-body"><p class="card-text">Add Coffee</p></div>
                        </div>
                       
                    </div>
                    <div id="popup-modal-add-coffee" class="modal-add-coffee">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                            <form enctype="multipart/form-data" action="#" method="post" class="coffee-form">
                                <!-- Add Picture -->
                                <div class="form-group">
                                    <label for="coffee-image">Add Picture</label>
                                    <input type="file" name="coffee-image" id="coffee-image" accept="image/*" class="form-control">
                                </div>
                                
                                <!-- Name of Coffee -->
                                <div class="form-group">
                                    <label for="coffee-name">Name of Coffee</label>
                                    <input type="text" name="coffee-name" id="coffee-name" placeholder="Enter coffee name" class="form-control" required>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Add Coffee</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- view button -->
                    <div id="popup-form" class="popup-form">
                        <div class="popup-content">
                            <span class="x-btn-view">&times;</span>
                            <div class="details">
                                <h3>View Coffee Details</h3>
                                <div class="picture-container"><img src="../assets/coffee1.png" alt="Mocha"></div>
                                <p id="coffee-details"></p>
                            </div>                       
                        </div>
                    </div>                  
            </div>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/admin-dashboard.js"></script>
    <script>
        window.onload = function() {
        const modalAddCoffee = document.getElementById('popup-modal-add-coffee');
        const modalViewCoffee = document.getElementById('popup-form');
        modalAddCoffee.style.display = 'none'; // Ensure the modal is hidden on page load
        modalViewCoffee.style.display = 'none';
        };

        document.addEventListener('DOMContentLoaded', function() {
        const addMenuBtn = document.getElementById('add-menu');
        const modalAddCoffee = document.getElementById('popup-modal-add-coffee');
        const closeButton = document.querySelector('.close-button');

        // Ensure the modal is hidden when the page loads
        modalAddCoffee.style.display = 'none';

        // Open modal when the Add Coffee button is clicked
        addMenuBtn.addEventListener('click', function() {
            modalAddCoffee.style.display = 'flex'; // This makes the modal visible and centers it
        });

        // Close modal when the close button is clicked
        closeButton.addEventListener('click', function() {
            modalAddCoffee.style.display = 'none'; // Hide the modal
        });

        // Close modal when clicking outside of modal content
        window.addEventListener('click', function(event) {
            if (event.target === modalAddCoffee) {
                modalAddCoffee.style.display = 'none'; // Hide the modal if clicked outside
            }
        });
    });
    </script>

</body>
</html>


<?php
require 'admin-connection.php'; 

if (isset($_POST["submit"])) {
    // Check if coffee name is provided
    if (empty($_POST["coffee-name"])) {
        echo "<script>alert('Please enter the coffee name');</script>";
        return; // Stop execution if no coffee name is provided
    }

    $productName = $_POST["coffee-name"]; // Get the coffee name from the form input

    // Check if an image was uploaded
    if ($_FILES["coffee-image"]["error"] == 4) {
        echo "<script> alert('Image Does Not Exist'); </script>";
    } else {
        $fileName = $_FILES["coffee-image"]["name"];
        $fileSize = $_FILES["coffee-image"]["size"];
        $tmpName = $_FILES["coffee-image"]["tmp_name"];

        // Validate image extension
        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        /* echo "Detected Extension: " . $imageExtension; */ // Debug line, remove after confirming the issue

        if (!in_array($imageExtension, $validImageExtensions)) {
            echo "<script> alert('Invalid Image Extension'); </script>";
        } else if ($fileSize > 1000000) {
            echo "<script> alert('Image Size Is Too Large'); </script>";
        } else {
            // Rename and save the image
            $newImageName = uniqid() . '.' . $imageExtension;
            move_uploaded_file($tmpName, '../img/' . $newImageName);

            // Insert into the database
            $query = "INSERT INTO products (id, product_img, product_name) VALUES ('', '$newImageName', '$productName')";

            if (mysqli_query($conn, $query)) {
                echo "<script>
                        window.location.href = 'admin-inventory.php'; // Redirect to inventory page after successful insertion
                      </script>";
            } else {
                echo "<script> alert('Error adding data'); </script>";
            }
        }
    }
}
?>
