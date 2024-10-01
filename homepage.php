<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOPEWISE ONLINE SHOPPERS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY"></script>
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
  
    <!-- Images for some products -->
   
       
        <div class="container1">
         <img src="smarket.jpg" alt="Image description" width="500" height="300" style="padding-left: 150px; padding-top: 30px;">
          <button class="btn" style="top: 50px; right: 100px;"><marquee><b style="color:forestgreen">(Our stock is full ready to serve you)</b></marquee> </button>
        </div>
            <div class="row">
        <div class="column1">
          <a href="cart.php"><button class="button">ORDER NOW</button></a>
        </div>
      </div>

        <div class="container1">
         <img src="shop.jpg" alt="Image description" width="500" height="300" style="padding-left: 150px; padding-top: 30px;">
          <button class="btn" style="top: 50px; right: 100px;"><marquee><b style="color:forestgreen">(Yummy eats)</b></marquee> </button>
        </div>
            <div class="row">
        <div class="column1">
          <a href="cart.php"><button class="button">ORDER NOW</button></a>
        </div>
      </div>

       <div class="container1">
         <img src="fashion.jpg" alt="Image description" width="500" height="300" style="padding-left: 150px; padding-top: 30px;">
          <button class="btn" style="top: 50px; right: 100px;"><marquee><b style="color:forestgreen">(Best foshions of clothings available)</b></marquee> </button>
        </div>
            <div class="row">
        <div class="column1">
          <a href="cart.php"><button class="button">ORDER NOW</button></a>
        </div>
      </div>

       <div class="container1">
         <img src="image.jpg" alt="Image description" width="500" height="300" style="padding-left: 150px; padding-top: 30px;">
          <button class="btn" style="top: 50px; right: 100px;"><marquee><b style="color:forestgreen">(Snacks for you to eat)</b></marquee> </button>
        </div>
            <div class="row">
        <div class="column1">
          <a href="cart.php"><button class="button">ORDER NOW</button></a>
        </div>
      </div>

       <div class="container1">
         <img src="view.jpg" alt="Image description" width="500" height="300" style="padding-left: 150px; padding-top: 30px;">
          <button class="btn" style="top: 50px; right: 100px;"><marquee><b style="color:forestgreen">(Yummy eats available for you)</b></marquee> </button>
        </div>
            <div class="row">
        <div class="column1">
          <a href="cart.php"><button class="button">ORDER NOW</button></a>
        </div>
      </div>

         <main>
      <h2>Welcome to ShopDB!</h2>
      <p>Discover a wide range of products at competitive prices. Shop from the comfort of your home, and enjoy hassle-free delivery.</p>
      <a href="cart.php" class="button">Shop Now</a>
    </main>
    <footer>
      <p>&copy; 2023 ShopDB. All Rights Reserved.</p>
    </footer>
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