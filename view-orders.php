<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>View orders</title>
      <link rel="stylesheet" href="user_login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <style>
.container{
            width: 1000px;
            height: 450px;
            
        }
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 95%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
.scroll{
    height: 400px;
    overflow-y: scroll;
}
        </style>
   <body>
      <div class="container">
        <div class="scroll">
         <header>View orders</header>
         <div class="form-outer justify-content-center">
            <div class="col-xl-12 col-lg-12 justify-content-center">
                <div class="d-flex justify-content-center mb-55">
            <table class=" scroll">
                <thead>
                    <tr>
                        <th>sr no</th> 
                        <th>odate</th> 
                        <th>price</th> 
                        <th>shipping address</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['oid'])){
                        $qDelete="DELETE from orders where oid=".$_GET['oid'];
                        $rsDelete= mysqli_query($con,$qDelete);
                    }
                        $q="SELECT * FROM  orders";
                        $rs=mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['oid'];?></td> 
                                <td><?php echo $row['odate'];?></td>
                                <td><?php echo $row['price'];?></td> 
                                <td><?php echo $row['shipping_address'];?></td> 
                                <td> <a href="view-product.php?oid=<?php echo $row['oid'];?>"class="btn btn-danger"
                                        onclick="confirm('do you want to delete?')">DELETE</a></td><br>
                            </tr>
                        <?php } ?>
                        </div>
                </tbody>
            </table>
                  <div>
                     <a href="admin-home.php">Go to Admin home</a>
                  </div>
                        </div>
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