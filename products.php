<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOPEWISE ONLINE SHOPPERS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY"></script>
	<title>Shopwise - Products</title>
	<style>
		/* Style for the product container */
		.product-container {
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: space-between;
		  margin: 20px 0;
		}

		/* Style for each product card */
		.product-card {
		  width: 300px;
		  margin-bottom: 20px;
		  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		  border-radius: 5px;
		}

		/* Style for the product image */
		.product-image {
		  width: 100%;
		  height: 200px;
		  object-fit: cover;
		  border-top-left-radius: 5px;
		  border-top-right-radius: 5px;
		}

		/* Style for the product name */
		.product-name {
		  font-size: 18px;
		  font-weight: bold;
		  margin: 10px;
		}

		/* Style for the product price */
		.product-price {
		  font-size: 16px;
		  margin: 10px;
		}

		/* Style for the product description */
		.product-description {
		  font-size: 14px;
		  margin: 10px;
		  color: #888;
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

	<div class="product-container">
</div>

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

			// Query to retrieve products from database
			$sql = "SELECT * FROM products";
			$result = $conn->query($sql);

			// Loop through the products and display each product
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
echo '<li class="product-card">';
echo '<img class="product-image" src="' . $row["image_url"] . '">';
echo '<div class="product-name">' . $row["name"] . '</div>';
echo '<div class="product-price">$' . $row["price"] . '</div>';
echo '<div class="product-description">' . $row["description"] . '</div>';
echo '<button class="add-to-cart-button" onclick="addToCart(' . $row["id"] . ')">Add to Cart</button>';
echo '</li>';
}
}
?>