<!-- Orders.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Receipt</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            background-size: cover;
            background-position: center;
            padding: 20px;
            color: #343a40;
        }
        .container {
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 0 auto;
        }
        h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #007bff;
        }
        .item {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            transition: box-shadow 0.3s ease;
        }
        .item:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .item img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 15px;
        }
        .item-details {
            overflow: hidden; /* Clear the float */
        }
        .item-name {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .item-price {
            color: #007bff;
            font-size: 1.1em;
            margin-top: 5px;
        }
        .btn-download {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            transition: background-color 0.3s ease;
        }
        .btn-download:hover {
            background-color: #0056b3;
        }
        .receipt {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f8f9fa;
        }
        .receipt-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
            text-align: center;
        }
        .receipt-content {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .receipt-total {
            font-size: 1.2em;
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="logo">
        <a href="#"><img src="assets/img/logo/logo1.jpg" alt="" width="250px" height="50px"></a>
    </div>
        <h2>Thank you for purchasing</h2>

        <!-- Item 1 -->
        <?php 
            include "connection.php";
            session_start();
            $username=$_SESSION['user'];
            $user_id=$username['uid'];
            $c_date=time();
            $date=date("Y-m-d",$c_date);
            $q1="select * from orders where uid='$user_id' and o_date='$date'";
            $rs1= mysqli_query($con,$q1);
            $total=0;
            while($row1=mysqli_fetch_array($rs1)){
                $cid=$row1['cid'];
                $q2="select * from courses where cid='$cid'";
                $rs2= mysqli_query($con,$q2);
                while($row2=mysqli_fetch_array($rs2)){
        ?>
        <div class="item">
            <img src="<?php echo $row2['img'] ?>" alt="Item Image">
            <div class="item-details">
                <div class="item-name">Course:  <?php echo $row2['course_name'] ?></div>
                <div class="item-name">Date: <?php echo $row1['o_date'] ?></div>
                <div class="item-price">Price: <?php echo $row2['price'] ?>/-</div>
                <div class="item-name">Purchased by: <?php echo $username['name'] ?></div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <?php
                $total=$total+$row2['price'];
                }
            } 
        ?>
        <!-- Total -->
        <div class="receipt-total">
            Total: <?php echo $total ?>/-
        </div>
        
        <!-- Download Receipt Button -->
        <button class="btn btn-download" onclick="window.print()">Download Receipt</button>
    </div>

    <!-- Bootstrap JS and dependencies (optional, if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
