 <?php include "header.php";
 include "menu.php";
 ?>
<style>

 .item,h2{
    text-align:center;
 }

 </style>
        <h2>Thank you for purchasing</h2>

        <!-- Item 1 -->
        <?php 
            include "connection.php";
            $username=$_SESSION['user'];
            $user_id=$username['uid'];
            $c_date=time();
            $date=date("Y-m-d",$c_date);
            $q1="select * from orders where uid='$user_id'";
            $rs1= mysqli_query($con,$q1);
            $total=0;
            while($row1=mysqli_fetch_array($rs1)){
                $pid=$row1['pid'];
                $q2="select * from products where pid='$pid'";
                $rs2= mysqli_query($con,$q2);
                while($row2=mysqli_fetch_array($rs2)){
        ?>
        <div class="item">
            <img src="<?php echo $row2['img1'] ?>" alt="Item Image">
            <div class="item-details">
                <div class="item-name">product:  <?php echo $row2['pname'] ?></div>
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
         <br>
        <div>
        <h2> Total: <?php echo $total ?>/-</h2>
        <button class="btn btn-download" onclick="window.print()">Download Receipt</button>
        </div>
    <!-- Bootstrap JS and dependencies (optional, if needed) -->
    


  