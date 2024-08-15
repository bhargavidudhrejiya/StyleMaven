<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>review</title>
      <link rel="stylesheet" href="user_login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
         <style>
            .item {
                margin-bottom: 20px;
                padding: 15px;
                border: 3px solid #ddd;
                border-radius: 10px;
                background-color: #fff;
                transition: box-shadow 0.3s ease;
            }
            .item:hover {
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
            h1{
                text-align:center;
            }
            .scroll{
    
    height: 400px;
    overflow-y: scroll;
            }
            .container{
            width: 1000px;
            height: 450px;
            
        }
        </style>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="scroll">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h1>Reviews</h1>
                        </div>
                    </div>
                </div>
                <?php 
                session_start();
                include "connection.php";
                if(isset($_GET['rid'])){
                    //delete record
                    $qdelete="delete from reviews where rid=".$_GET['rid'];
                    $rdelete=mysqli_query($con,$qdelete);
                }
                $username=$_SESSION['user'];
                $user_id=$username['uid'];
                $q1="select * from reviews";
                $rs1 = mysqli_query($con,$q1);
                while($row1=mysqli_fetch_array($rs1)){
                    $uid=$row1['uid'];
                    $q2="select * from users where uid='$uid'";
                    $rs2=mysqli_query($con,$q2);
                    while($row2=mysqli_fetch_array($rs2)){
                        $uid=$row2['uid'];
                ?>
                <div class="item">
                
                <h2>Review by:- <?php echo $row2['name']?></h2><br>
                <h2>Date:- <?php echo $row1['rdate']?></h2><br>
                <p><?php echo $row1['message']?></p>
                 
                
                <?php
                    if($user_id==$uid){
                ?>
                        Do you want to delete your review?<a href="review.php?rid=<?php echo $row1['rid']; ?>" class="btn" 
                        onclick="return confirm('do you want to delete?')">Delete</a>
                    
                    <?php } ?>
                    </div>
                    <?php
                            } 
                         }
                    ?>
                    <div class="section-tittle mb-55">
                    <h1>You can send your review by writing into these box:-</h1>
                    <form action="review-code.php" method="post">
                        <textarea name="review" rows="3" cols="20" placeholder="Enter your review.."></textarea><br>
                        <input type="submit" value="Send" class="btn btn-primary">
                    </form>
                    </div>
                        </div>
                </div>
            </div>
        </div>
      <script src="login_java.js"></script>
   </body>
</html>