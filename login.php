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
input[type="password"],
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
    background-color: #4CAF50;
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



<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<label for = "username">Username</label><br>	
<input type="text" name="username" placeholder="Username" required /></br>
<label for = "password">Password</label><br>
<input type="password" name="password" placeholder="Password" required /></br>
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>

</body>
</html>
<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `register1` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($conn,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirects to home page
	    header("Location: homepage.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{}
?>