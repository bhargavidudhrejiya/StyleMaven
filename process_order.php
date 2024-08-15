<?php
session_start();
include ("connection.php");

// Get user ID
$user_id = $_SESSION['user']['uid'];

// Fetch cart items
$sql = "SELECT c.cid, p.pname, p.price, p.pid FROM carts c INNER JOIN products p ON c.pid = p.pid WHERE c.uid = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Process cart items and insert into orders table
while ($row = mysqli_fetch_assoc($result)) {
  echo "Processing cart item: " . $row['pname'] . "<br>";  // Debugging statement

  $cid = $row['cid'];
  $pname = $row['pname'];
  $price = $row['price'];
  $pid = $row['pid'];

  // Calculate total price (assuming you're storing quantity in carts table)
  $quantity = 1; // Replace with actual quantity from carts table
  $total_price = $price * $quantity;

  // Generate order date
  $order_date = date('Y-m-d');

  // Assume you have the shipping address from a form or session
  $shipping_address = $_SESSION['user']['address']; // Replace with actual logic to get the address

  // Insert into orders table (including shipping address)
  $q = "INSERT INTO orders (uid, pid, price, odate, shipping_address) VALUES ('$user_id','$pid','$price','$order_date','$shipping_address')";
 // $q = mysqli_prepare($con, $sql);
  $rs=mysqli_query($con,$q);

  if (mysqli_error($con)) {
    echo "Error inserting order: " . mysqli_error($con) . "<br>";  // Display database errors
  }

  // Optional: Delete item from cart after successful order
  $delete_sql = "DELETE FROM carts WHERE cid = ?";
  $delete_stmt = mysqli_prepare($con, $delete_sql);
  mysqli_stmt_bind_param($delete_stmt, "i", $cid);
  mysqli_stmt_execute($delete_stmt);
}

mysqli_close($con);

// Redirect to order confirmation page or display success message
header("Location: order.php");
exit;
?>