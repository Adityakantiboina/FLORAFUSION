<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mysql'; // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['num'];
    $freetime = $_POST['free'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO contact_form (name, mobile, freetime, email, message) VALUES ('$name', '$mobile', '$freetime', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Page</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce plants and seeds platform</title>
    <link rel="stylesheet" href="contact.css">
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
            <a href="shop.html" class="button-link">ShopNow</a>
            <a href="index.html" class="button-link">Logout</a>

        </div>
    </header>
    <div class="ContactContent">
        <h2><b>Contact Us</b></h2>
        <p><b>If you have any queries, Please fill this</b></p>

        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="num">Mobile number</label>
            <input type="int" id="num" name="num"required>
            <label for="free">Free time:</label>
            <input type="text" id="free" name="free" required>
            
            <label for="email">Email Id:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Queries:</label>
            <textarea id="message" name="message" rows="6" required></textarea>
            
            <input type="submit" value="Submit">
        </form>

        <div class="CustomerCare">
            <h3><b>Customer Care</b></h3>
            <p><b>If you need assistance, you can contact our customer support team:</b></p>
            <ul>
                <li>Email: florafusion@yahoo.co.in</li>
                <li>Phone: +91 8464880260</li>
                <li>Address: Benz circle, opp to Trendset Mall,Vijayawada,Andhra pradesh,520008</li>
            </ul>
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



