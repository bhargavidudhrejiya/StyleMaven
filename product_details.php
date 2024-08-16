 
 <?php 
    include "header.php";
    include "menu.php";
?>
                         
    <main>
        <?php 
         include "connection.php";
        $q="select * from products where pid=".$_GET['pid'];
        $rs=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($rs))
        {
            ?>
                <div class="single-new-arrival mb-50 text-center">
                    <div class="popular-img">
                        <img src="<?php echo $row['img1'];?>" alt="" width="300px" height="400px">
                                         
                    </div>
                    <div class="popular-caption">
                                      
                    <br>
                    <h3>product name : <?php echo $row['pname'];?></h3>
                    <h3>colour : <?php echo $row['colour'];?></h3>
                    <h3>price : <?php echo $row['price'];?></h3>
                    <h3>size : <?php echo $row['size'];?></h3>
                </div>
     
    <a href ="cart-code.php?pid=<?php echo $row['pid'];?>" class="btn">add to cart</a></br>
      <?php
        }                                                               
   ?></br>
         

        <!--? Services Area Start -->
        <div class="categories-area section-padding40 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services1.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services2.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5> secure payment</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services3.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5> money back guarantee</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cat-icon">
                        <img src="assets/img/icon/services4.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5> online support</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--? Services Area End -->
    </main>

     <?php include "footer.php";?>