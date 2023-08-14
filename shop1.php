<!DOCTYPE html>
<html>
<head>
    <title>ShopNow</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor</title>
    <link rel="stylesheet" href="shop.css">
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
        <!-- order_step1.php -->
    <div class="step">
        <h2>Step 1: Select Product and Quantity</h2>
        <form id="step1Form" action="shop2.php" method="post">
            <label for="productType">Product Type:</label>
            <select id="productType" name="productType" required>
                <option value="plants">Plants</option>
                <option value="seeds">Seeds</option>
                <option value="indoor">Indoor</option>
            </select><br><br>
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required><br><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required><br><br>
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
