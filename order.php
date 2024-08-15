 <?php include "header.php";
 include "menu.php";
 ?>
<style>

 h2{
    text-align:center;
 }

 </style>
        

        <!-- Item 1 -->
       
        <div class="category-area">
            <div class="container">
            <div class="text-center">
                <h2>Thank you for purchasing</h2>
            </div>
    
            <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="category-listing mb-50">
                            </div>
                        </div> 
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-8 ">
                        <div class="new-arrival new-arrival2">
                            <div class="row">
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
                                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="<?php print $row2['img1'];?>" alt="" width="450px" height="300px">
                                        </div>
                                        <div class="popular-caption">
                                        <div class="item-name">product:  <?php echo $row2['pname'] ?></div>
                <div class="item-price">Price: <?php echo $row2['price'] ?>/-</div>
                <div class="item-name">Purchased by: <?php echo $username['name'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                $total=$total+$row2['price'];
                }
            } 
        ?>
                            </div>
                        </div>
                    </div>
                </div>

       
        <!-- Total -->
         <br>
        <div>
        <h2> Total: <?php echo $total ?>/-</h2>
        </div>
    <!-- Bootstrap JS and dependencies (optional, if needed) -->
    


  