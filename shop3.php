
<!DOCTYPE html>
<html>
    <head>
        <title>ShopNow</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Outdoor</title>
        <link rel="stylesheet" href="shop3.css">
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
                <h2>Step 3: Confirm Your Order</h2>
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                
                
                $productType = $_POST['productType'];
                $productName = $_POST['productName'];
                $quantity = $_POST['quantity'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $mobile = $_POST['mobile'];
                $pincode = $_POST['pincode']; 
                $landmark = $_POST['landmark']; 
                
              
                $conn = new mysqli('localhost', 'root', '', 'mysql');
                $query = "SELECT price FROM products WHERE name = '$productName'";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                $productPrice = $row['price'];

              
                $orderAmount = $productPrice * $quantity;
                
                echo "<p>Order Summary:</p>";
                echo "<p>Product Type: $productType</p>";
                echo "<p>Product Name: $productName</p>";
                echo "<p>Quantity: $quantity</p>";
                echo "<p>Product Price: $productPrice</p>";
                echo "<p>Order Amount: $orderAmount</p>";
                ?>
                <form id="step3Form" action="shop4.php" method="post">
                    <input type="hidden" name="productType" value="<?php echo $productType; ?>">
                    <input type="hidden" name="productName" value="<?php echo $productName; ?>">
                    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                    <input type="hidden" name="orderAmount" value="<?php echo $orderAmount; ?>">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="address" value="<?php echo $address; ?>">
                    <input type="hidden" name="mobile" value="<?php echo $mobile; ?>"> 
                    <input type="hidden" name="pincode" value="<?php echo $pincode; ?>"> 
                    <input type="hidden" name="landmark" value="<?php echo $landmark; ?>"> 
                    <button type="submit" class="button-link">Order Now</button>
                </form>
            </div>
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
