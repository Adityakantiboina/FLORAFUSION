
<!DOCTYPE html>
<html>
<head>
    <title>ShopNow</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor</title>
    <link rel="stylesheet" href="shop2.css">
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
            <h2>Step 2: Enter Your Details</h2>
            <form id="step2Form" action="shop3.php" method="post">
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                
            
                $productType = $_POST['productType'];
                $productName = $_POST['productName'];
                $quantity = $_POST['quantity'];
                ?>
                <input type="hidden" name="productType" value="<?php echo $productType; ?>">
                <input type="hidden" name="productName" value="<?php echo $productName; ?>">
                <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                
                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" required><br><br>
                
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea><br><br>
                
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode" required><br><br>
                
                <label for="landmark">Landmark:</label>
                <input type="text" id="landmark" name="landmark"><br><br>
                
                <button type="submit">Next</button>
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
