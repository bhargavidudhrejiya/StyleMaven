<header>
        <!-- Header Start -->
        <div class="header-area ">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo1.png" alt="" width="250px" height="50px"></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li> 
                                        <li><a href="shop.php">shop</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <?php
                                        session_start();
                                        if(isset($_SESSION['user'])){
                                            ?>
                                        <li><a href="review.php">Reviews</a></li>
                                        <li><a href="mycart.php">Carts</a></li>
                                        <li><a href="order.php">orders</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                        <?php
                                        } else { ?>
                                        <li><a href="login.php">Login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                        <?php
                                        }    
                                        ?>


                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>