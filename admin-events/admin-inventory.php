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
    <link rel="stylesheet" href="../admin-events/admin-inventory.css">

</head>

<body>  
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
                    <a href="../admin-dashboard.php" class="sidebar-link">
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
                <a href="../home.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <div class="text-center">
                <h1>Menu and Inventory</h1>
                <h1>Coffee</h1>
                <div class="coffee-products">
                    
                    <!-- logic for obtaining the product/s in databse -->
                    <?php
                    require 'admin-connection.php';

                    // Query to fetch coffee products
                    $query = "SELECT * FROM products WHERE category='Coffee'";
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
                                        <button 
                                            class="ediButton btn btn-secondary" 
                                            id="edit-btn-<?php echo $row['id']; ?>" 
                                            data-id="<?php echo $row['id']; ?>" 
                                            data-name="<?php echo $row['product_name']; ?>" 
                                            data-image="../img/<?php echo $row['product_img']; ?>"
                                        >
                                            Edit
                                        </button>
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
                            <img src="../assets/add-square-removebg-preview.png" alt="" class="img-fluid add-menu" id="add-menu" style="position: absolute; right: 10px; top:30px; height: 50px; width: 50px;"> 
                            <p class="menu-name" style="position: absolute; top: 45px; right: 70px; font-size: 12px; color: #333;">Add Product</p>
                        </div>
                       
                    </div>
                    <div id="popup-modal-add-coffee" class="modal-add-coffee">
                        <div class="modal-content">
                            <span class="close-button">&times;</span>
                            <form enctype="multipart/form-data" action="#" method="post" class="coffee-form">
                                <!-- Add Picture -->
                                <div class="form-group">
                                    <label for="product-image">Add Picture</label>
                                    <input type="file" name="product-image" id="product-image" accept="image/*" class="form-control">
                                </div>
                                
                                <!-- Name of Product -->
                                <div class="form-group">
                                    <label for="product-name">Name of Product</label>
                                    <input type="text" name="product-name" id="product-name" placeholder="Enter product name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="product-category">Category</label>
                                    <select name="product-category" id="product-category" class="form-control" required>
                                        <option value="coffee">Coffee</option>
                                        <option value="tea">Tea</option>
                                        <option value="frappe">Frappe</option>
                                        <option value="add-ons">Add-ons</option>
                                        <option value="food">Food</option>
                                    </select>
                                </div>

                                <!-- Price of Coffee -->
                                <div class="form-group">
                                    <label for="product-price">Price</label>
                                    <input type="number" name="product-price" id="product-price" placeholder="Enter product price" class="form-control" required>
                                </div>


                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div id="popup-form" class="popup-form">
                        <div class="popup-content">
                            <span class="x-btn-view">&times;</span>
                            <div class="details">
                                <div class="picture-container">
                                    <img src="../assets/coffee1.png" alt="Mocha">
                                </div>
                                <p id="coffee-details"></p>
                            </div>
                            <form id="delete-form" method="POST" action="delete-product.php">
                                <input type="hidden" name="product_id" id="delete-product-id" />
                                <input type="hidden" name="category" id="delete-category"/>
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div>Tea</div>
                <div class="tea-products">
                <?php
                    require 'admin-connection.php';

                    // Query to fetch coffee products
                    $query = "SELECT * FROM products WHERE category='tea'";
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
                                        <button 
                                            class="ediButton btn btn-secondary" 
                                            id="edit-btn-<?php echo $row['id']; ?>" 
                                            data-id="<?php echo $row['id']; ?>" 
                                            data-name="<?php echo $row['product_name']; ?>" 
                                            data-image="../img/<?php echo $row['product_img']; ?>"
                                        >
                                            Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
        
            </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/admin-dashboard.js"></script>

    <script>
        /* addming a coffee */
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

    /* Deleting coffee */
    document.addEventListener('DOMContentLoaded', () => {
    const editButtons = document.querySelectorAll('.ediButton');
    const popupForm = document.getElementById('popup-form');
    const closeButton = document.querySelector('.x-btn-view');
    const coffeeImage = popupForm.querySelector('.picture-container img');
    const coffeeDetails = document.getElementById('coffee-details');
    const deleteProductIdInput = document.getElementById('delete-product-id');

    // Handle edit button click
    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const coffeeId = this.getAttribute('data-id');
            const coffeeName = this.getAttribute('data-name');
            const coffeeImageSrc = this.getAttribute('data-image');

            // Update popup content
            coffeeImage.src = coffeeImageSrc;
            coffeeImage.alt = `Picture of ${coffeeName}`;
            coffeeDetails.textContent = coffeeName;
            deleteProductIdInput.value = coffeeId;

            // Show the popup
            popupForm.style.display = 'flex';
        });
    });

    // Close the popup
    closeButton.addEventListener('click', () => {
        popupForm.style.display = 'none';
    });
});
    </script>


</body>
</html>

<!-- adding a coffee -->
<?php
require 'admin-connection.php'; 

if (isset($_POST["submit"])) {
    // Check if coffee name is provided
    if (empty($_POST["product-name"])) {
        echo "<script>alert('Please enter the coffee name');</script>";
        return; // Stop execution if no coffee name is provided
    }

    $productName = $_POST["product-name"]; // Get the coffee name from the form input
    $productPrice = $_POST["product-price"];
    $productCategory = $_POST["product-category"];

    // Check if an image was uploaded
    if ($_FILES["product-image"]["error"] == 4) {
        echo "<script> alert('Image Does Not Exist'); </script>";
    } else {
        $fileName = $_FILES["product-image"]["name"];
        $fileSize = $_FILES["product-image"]["size"];
        $tmpName = $_FILES["product-image"]["tmp_name"];

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
            $query = "INSERT INTO products (id, product_img, product_name, category, price) VALUES ('', '$newImageName', '$productName', '$productCategory', '$productPrice')";

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