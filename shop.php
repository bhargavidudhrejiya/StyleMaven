 <?php include ("header.php");
    include ("menu.php");
    ?>
    <main>
        <div class="category-area">
            <div class="container">
               
                    <div class="text-center">
                    <h2>Shop with us</h2>
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
                                $q="SELECT *FROM products";
                                $rs=mysqli_query($con,$q);
                                while($row=mysqli_fetch_array($rs)){
                                    ?>
                                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="<?php print $row['img1'];?>" alt="" width="450px" height="300px">
                                        </div>
                                        <div class="popular-caption">
                                            <p><?php echo $row['pname'];?></p>
                                            <span><?php echo $row['price']; ?>/-</span>
                                            <a href ="product_details.php?pid=<?php echo $row['pid'];?>" class="btn">View more </a>
                                        </div>
                                    </div>
                                </div>
                                <?php  }  ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Popular Items End -->
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