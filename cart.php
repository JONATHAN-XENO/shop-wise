<?php
// Start session
session_start();

// Check if cart exists, if not create an empty array
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Check if item has been added to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Check if product already exists in cart, if so, update quantity
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        // Add new product to cart
        $_SESSION['cart'][$product_id] = array(
            'product_name' => $product_name,
            'product_price' => $product_price,
            'quantity' => $quantity
        );
    }
}

// Check if item has been removed from cart
if (isset($_GET['remove_from_cart'])) {
    $product_id = $_GET['remove_from_cart'];
    unset($_SESSION['cart'][$product_id]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SHOPEWISE ONLINE SHOPPERS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY"></script>
  </head>
    <meta charset="UTF-8">
    <title>Shopping Cart Example</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        th {
            background-color: #4CAF50;
            color: white;
        }
        .cart-action {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cart-action a {
            color: #f44336;
            text-decoration: none;
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
    <h1>Shopping Cart </h1>

    <h2>Products</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Prestidge</td>
                <td>sh.4000.00</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="prestidge">
                        <input type="hidden" name="product_price" value="4000.00">
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </td>
            </tr>

            <!--product 2-->
           <tr>
                <td>Wheatflour</td>
                <td>sh.8000.00</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="Wheatflour">
                        <input type="hidden" name="product_price" value="8000.00">
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </td>
            </tr>

              <!--product 2-->
           <tr>
                <td>Kg of Sugar</td>
                <td>sh.5000.00</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="product_id" value="1">
                        <input type="hidden" name="product_name" value="sugar">
                        <input type="hidden" name="product_price" value="5000.00">
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </td>
            </tr>

            <tr>
                <td>Bread</td>
                <td>sh.7000.00</td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="product_name" value="bread">
                        <input type="hidden" name="product_price" value="7000.00">
                        <input type="number" name="quantity" value="1" min="1">
                        <button type="submit" name="submit">Submit</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>



