<body>
      <!--header section start -->
      <?php include "header.php";
       include "menu.php"; ?>
      <!--header section end -->
      <!-- services section start -->
            <div class="services_section_2">
               <div class="row">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                           <div class="section-tittle text-center mb-65">
                               <h2>Carts</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php
               include "connection.php"; 
          $username=$_SESSION['user'];
          if (isset($_GET["cid"])){
             $qDelete = "delete from carts where cid=".$_GET['cid'];
             $rsDelete = mysqli_query($con,$qDelete);
         }  
          $user_id=$username['uid'];
          $q1="select * from carts where uid='$user_id'";
          $rs1=mysqli_query($con,$q1);
          while($row1=mysqli_fetch_array($rs1)){
            $pid=$row1['pid'];
            $q2="select * from products where pid='$pid'";
            $rs2=mysqli_query($con,$q2);
            while($row2=mysqli_fetch_array($rs2)){
            ?>
                  <div class="col-lg-2 col-md-5 "><br>
                     <div class="box_main ">
                        <div class="house_icon">
                        <img src="<?php print $row2['img1']?>" class="image_1" style="height:150px; width:150px;">
                        </div>
                        <h3 class="decorate_text"><?php print $row2['pname']?></h3>
                        <p class="tation_text"><?php print $row2['price']?>/-</p>
                        <div class="readmore_btn"><a href="mycart.php?cid=<?php echo $row1['cid']?>" class="btn btn-secondary" 
                        onclick="return confirm('Do you want to remove?')">Remove</a>
                        
                     </div>
                  
                     </div>
                  </div>
                  <?php }
                  } ?>
                  
               </div><br><br>
               <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                           <div class="section-tittle text-center mb-65">
                              <a href="shop.php" class="btn btn-primary">shop</a>
                              <a href="order.php" class="btn btn-primary">Order Now</a><br><br>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
        
      <!-- services section end -->
      <!-- footer section start -->
      <?php include "footer.php"; ?>
      <!-- footer section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>     
   </body>
</html>
