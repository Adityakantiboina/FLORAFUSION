<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mysql';

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$createTableQuery = "CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($mysqli->query($createTableQuery) !== TRUE) {
    die("Error creating table: " . $mysqli->error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['register'])) {
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {
    $login_username = $mysqli->real_escape_string($_POST['login_username']);
    $login_password = $mysqli->real_escape_string($_POST['login_password']);

    $loginQuery = "SELECT id, password FROM users WHERE username = '$login_username' LIMIT 1";
    $result = $mysqli->query($loginQuery);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($login_password, $hashed_password)) {
            echo "Login successful!";
            $redirect_url = "Home.html";
            header("Location: " . $redirect_url);
            exit(); 
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "Invalid username or password!";
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
  font-family: Arial, sans-serif;
  background-image: url('background2.jpg');
  margin: 0;
  padding: 0;
}
*{
  font-family: 'Caveat', cursive;
font-family: 'Lora', serif;
}
.Header {
  background-color: #0d0404;
  padding: 5px;
  box-shadow: 5px 8px 5px rgba(4, 4, 4, 0.3);
  margin: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  padding: 10px;
  padding-bottom:0px;

}

.Header a {
  text-decoration: none;
  color: #131212;
  font-size: 15px;
}

.logohead {
  display: flex;
  align-items: center;
  font-family: 'Dancing Script', cursive;
  left:50px;
  font-size: 30px;
  color: #131212;
}
.logoname{
 
  left:10px;
  text-align: left;
  font-size: 20px;
  color: #fff; 
}

.logo {
  height: 100px;
  width: 140px;  
  margin-top:13px;
  top: 10px;
  bottom: 5px;
}

.navbar{
  display:flex;
  justify-content: right;
  margin:0px 10px 8px 0px;
}
.navbar div{
  margin:8px;
  width:60px;
  text-align: center;
  padding:5px;
  margin:4px;
  width:60px;
  text-align: center;
}
.navbar div:hover{
  transform: translate(0.5px,0.5px);
}

.navbar {
  display: flex;
  justify-content: right;
  padding:0px 20px 3px 0px;
  margin:110px 0px 0px 0px;
}

.container {
  width: 450px;
  height: 300px;
  margin: 100px auto;
  padding: 20px;
  background-color:#a8c7f3;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.h1 {
  font-family: 'Dancing Script', cursive;
  text-align: center;
  font-size: 50px;
}

.form-group {
  margin: 20px;
}

label,
input {
  width: 100%;
  margin-bottom: 10px;
}

button {
  width: 100%;
  background-color: #100656;
  color: #fff;
  border: none;
  padding: 10px;
  cursor: pointer;
  border-radius: 10px;
}

button:hover {
  background-color: #323bbb;
}
.register a{
    color: white;
    display: inline-block;
    width: 100%;
    height: 100%;
    text-decoration: none;
  }


 /*footer*/
 footer{
    background-color:#0d0404;
    width:100%;
    height:30px;
    }
    
    .footer1 {
      color:#d7ecda;
      width:100%;
      text-align: center;
      padding: 30px 0;
      background-color: #151414;
     
    }
    
    .footer h4{
      margin-top: 25px;
      margin-bottom: 20px;
      font-weight: 800;
    }
    
    
    .icons .fa{             /*fa=for the icons */
       color: #8673b9;
       margin: 0 13px;
       cursor: pointer;
       padding: 18px 0;
    }
    
    .fa-heart{
      color: #8673b9;
    }

        </style>
    
</head>

<body>
    <div class="Header">
       
        <div class="logohead">
            <img class="logo" src="logo.png" alt="logo">
</div>
<div class="logoname">
            <h1>  Flora Fusion</h1>

        </div>
   
    </div>
    <div class="container">
        <h1>Login</h1>
        <form method="post" action="login_process.php"> 
    <table class="form-table">
        <tr>
            <td><label for="login_username">Username:</label></td>
            <td><input type="text" name="login_username" id="login_username" placeholder="Enter your username" required></td>
        </tr>
        <tr>
            <td><label for="login_password">Password:</label></td>
            <td><input type="password" name="login_password" id="login_password" placeholder="Enter your password" required></td>
        </tr>
        <tr>
            <td colspan="2" class="center"><button type="submit" name="login">Login</button></td>
        </tr>
        <tr>
            <td colspan="2" class="center">
               <b> If you are a new user then</b><button class="register"><a href="register_process.php">Register</a></button>
            </td>
        </tr>
    </table>
</form>

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
