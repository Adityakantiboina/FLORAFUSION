

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
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
  background-color:#0d0404;
  padding: 10px;
  box-shadow: 10px 8px 10px rgba(4, 4, 4, 0.3);
  margin: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  padding: 10px;
  padding-bottom:0px;
  border-bottom: solid white 5px;
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
    font-family: 'Dancing Script', cursive;
  left:10px;
  text-align: left;
  font-size: 20px;
  color:#fff;
}

.logo {
  height: 120px;
  width: 140px;  
  margin-top:13px;
  top: 10px;
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
  max-width: 400px;
  margin: 100px auto;
  padding: 20px;
  background-color: #9b97ef;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;
}

h1 {
 
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
.login a {
    color: white;
    display: inline-block;
    width: 100%;
    height: 100%;
    text-decoration: none;
  }

.Header {
  color: #fff;
  padding: 10px;
}

.success-message{
    align:center;
    margin-top: 1px; 
            color: green;
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
        <h1>Registration</h1>
        <form method="post" action="">
            <table>
                <tr>
                    <td><label for="full_name">Full Name:</label></td>
                    <td><input type="text" name="full_name" id="full_name" placeholder = "Enter your full name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" id="email" placeholder = "Enter your email" required></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username" id="username" placeholder = "Enter username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password" placeholder = "Enter your password" required></td>
                </tr>
                <tr>
                    <td><label for="password_confirm">Confirm Password:</label></td>
                    <td><input type="password" name="password_confirm" id="password_confirm" placeholder = "Confirm Password" required></td>
                </tr>
            </table>
            
            <button type="submit">Register</button><br>
            <h2></h2>
           <button class="login"> <a href = "http://localhost/Online plant website/login_process.php">Login</a></button>
        </form>
        <div>
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = $mysqli->real_escape_string($_POST['full_name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $password_confirm = $mysqli->real_escape_string($_POST['password_confirm']);

    if (empty($full_name) || empty($email) || empty($username) || empty($password) || empty($password_confirm)) {
        echo "All fields are required!";
    } elseif ($password !== $password_confirm) {
        echo "Passwords do not match!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
    } else {
       
        $checkQuery = "SELECT id FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
        $result = $mysqli->query($checkQuery);
        if ($result && $result->num_rows > 0) {
            echo "Username or email already exists!";
        }
         else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO users (full_name, email, username, password) VALUES ('$full_name', '$email', '$username', '$hashed_password')";
            if ($mysqli->query($insertQuery) === TRUE) {
                echo '<div class="success-message">Registration successful!</div>';
            } else {
                echo "Error: " . $insertQuery . "<br>" . $mysqli->error;
            }
        }
    }
}

$mysqli->close();
?>
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
