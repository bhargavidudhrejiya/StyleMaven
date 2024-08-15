<?php
include "header.php";
include "menu.php";
include ("connection.php");

// Get user ID from query parameter
$user_id = $_SESSION['user']['uid'];

// Fetch cart items
$sql = "SELECT c.cid, p.pname, p.price, p.pid FROM carts c INNER JOIN products p ON c.pid = p.pid WHERE c.uid = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

?>

<div class="container text-center">
  <h2>Invoice</h2>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $total = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['pname'] . "</td>
                <td>" . $row['price'] . "</td>
              </tr>";
        $total += $row['price'];
      }
      ?>
      <tr>
        <td>Total</td>
        <td><?php echo $total; ?></td>
      </tr>
    </tbody>
  </table>

  <br>
  <form action='process_order.php' method='POST' class="text-center">
    <input type='hidden' name='user_id' value='<?php echo $user_id; ?>'>
    <button class="btn btn-primary" type='submit'>Confirm Order</button>
    <button class="btn btn-download" onclick="window.print()">Download Receipt</button>
  </form>
</div>
<?php
?>