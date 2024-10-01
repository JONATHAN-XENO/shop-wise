<!DOCTYPE html>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOPEWISE ONLINE SHOPPERS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY"></script>

    <style>
        form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: green;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 90%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

button[type="submit"] {
    display: block;
    margin: 0 auto;
    padding: 10px 20px;
    background-color: grey;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #3e8e41;
}

    </style>
  </head>
  <body style="background-color: orange;">
  
    <div class="header">
      <h1>SHOPEWISE ONLINE SHOPPERS</h1>
    </div>
    
    <div class="navbar">
      <a href="homepage.php">Home</a>
      <a href="products.php">Products</a>
      <a href="cart.php">Cart</a>
      <a href="register.php">Register</a>
      <a href="login.php">Sign in</a>
      <a href="contact_us.php">Contact Us</a>
      <a href="location.html">Location</a>
    </div>

<body>

<h1>Registration</h1>



<div class="form">
<form name="registration" action="" method="post"><br>
<lable for = "username">Username</lable><br>        
<input type="text" name="username" placeholder="Username" required /><br></br>
<label for = "email">Email</label><br>
<input type="text" name="email" placeholder="Email" required /><br><br>
<label for = "password">Password</label><br>
<input type="text" name="password" placeholder="Password" required /><br></br>
<label for = "confirm_password">Confirm_password</label><br>
<input type="text" name="confirm_password" placeholder="confirm_password" required /><br></br>

<input type="submit" name="submit" value="Register" /><br>
</form>
</div>
</body>
</html>
<?php
require('config.php');
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn,$email);
	$password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn,$password);
    $confirm_password = stripslashes($_REQUEST['confirm_password']);
	$confirm_password = mysqli_real_escape_string($conn,$confirm_password);
    // Check if password and confirm password fields match
    if ($password != $confirm_password) {
        echo "Error: Passwords do not match";
        exit();
    }
        $query = "INSERT into `register1` (username, email, password, confirm_password)
VALUES ('$username','$email', '$password', '$confirm_password' )";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>

<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else
?>