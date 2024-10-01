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
    paading-top: 20px;
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
    width: 50%;
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
<h2>You Can Contact Us</h2>
<form method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br></br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br></br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" required></textarea><br></br>

    <button type="submit">Submit</button>
</form>
</body>
</html>

<?php
// Database connection
$servername = "localhost";
$username = "moses";
$password = "M#ses";
$dbname = "shopwise";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert form data into database
    $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error submitting form: " . $conn->error;
    }
}
?>