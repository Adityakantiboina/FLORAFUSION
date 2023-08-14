<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productType = $_POST['productType'];
    $productName = $_POST['productName'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $pincode = $_POST['pincode'];
    $landmark = $_POST['landmark'];

    $host = 'localhost'; 
    $username = 'root';
    $password = ''; 
    $database = 'mysql';

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $insertQuery = "INSERT INTO orders (product_type, product_name, quantity, name, email, address, mobile, pincode, landmark) VALUES ('$productType', '$productName', '$quantity', '$name', '$email', '$address', '$mobile', '$pincode', '$landmark')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Order successful!";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ShopNow</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="shop4.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <div>
                <img src="logo.png" alt="Logo" id="logo">
                <span id="website-name"><i>Flora Fusion</i></span>
            </div>
            <div class="header-buttons">
                <a href="Home.html" class="button-link">Home</a>
                <a href="plants.html" class="button-link">Outdoor</a>
                <a href="seeds.html" class="button-link">Seeds</a>
                <a href="indoor.html" class="button-link">Indoor</a>
    
                <a href="Aboutus.html" class="button-link">About</a>
    
                <a href="http://localhost/Online plant website/contact.php" class="button-link">Contact us</a>
                <a href="index.html" class="button-link">Logout</a>
    
            </div>
        </header>
    <div class="BookNowContent">
        <div class="step">
            <h2>Order Summary</h2>
            <p><strong>Product Type:</strong> <?php echo $productType; ?></p>
            <p><strong>Product Name:</strong> <?php echo $productName; ?></p>
            <p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
            <p><strong>Mobile Number:</strong> <?php echo $mobile; ?></p>
            <p><strong>Pincode:</strong> <?php echo $pincode; ?></p>
            <p><strong>Landmark:</strong> <?php echo $landmark; ?></p>
            <h3> Thanks for your Order!!! </h3>
        </div>
        <a href="Home.html" class="button-link1">Home</a>
    </div>
    <footer>
        <section class="footer1">
            <h4>Connect With Us</h4>
            <div class="icons">
               <i class="fa fa-facebook" ></i>
               <i class="fa fa-twitter" ></i>
               <i class="fa fa-instagram" ></i>
               <i class="fa fa-linkedin" ></i>
            </div>
        </section>
        </footer>
</body>
</html>
