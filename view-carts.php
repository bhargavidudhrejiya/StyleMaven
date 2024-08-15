<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>View carts</title>
      <link rel="stylesheet" href="user_login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
 .container{
            width: 400px;
            height: 300px;
            }
table, th, td {
  border: 1px solid;
  margin: 8px;
  text-align: center;
  }
</style>
    </head>
    
   <body>
      <div class="container">
         <header>View carts</header>
         <div class="form-outer">
            <div class="col-xl-12 col-lg-12>
            
            <table class= "table">
                <thead>
                    <tr>
                        <th>cid</th>
                        <th>uid</th>
                        <th>pid</th>
                        <th>qty</th>
                        <th>Action</th>
                        <br>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['cid'])){
                        $qDelete="DELETE from carts where cid=".$_GET['cid'];
                        $rsDelete= mysqli_query($con,$qDelete);
                    }
                        $q="SELECT * FROM carts";
                        $rs=mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['cid'];?></td>
                                <td><?php echo $row['uid'];?></td>
                                <td><?php echo $row['pid'];?></td>
                                <td><?php echo $row['qty'];?></td>
                                <td> <a href="view-carts.php?cid=<?php echo $row['cid'];?>"class="btn btn-danger"
                                        onclick="confirm('do you want to delete?')">DELETE</a></td>
                            </tr>
                        <?php 
                        }
                     ?>
                        
                </tbody>
            </table>
                        </div>
                        </div>
               
            </form>
         </div>
      </div>
      <script src="login_java.js"></script>
   </body>
</html>
<div>
</div>