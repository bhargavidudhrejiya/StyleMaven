<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>View  products </title>
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
         <header>View products</header>
         
            <table class=" scroll">
                <thead>
                    <tr>
                        <th>name</th> 
                        <th>price</th> 
                        <th>img1</th> 
                        <th>size<?</th>
                        <th>colour</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['pid'])){
                        $qDelete="DELETE from products where pid=".$_GET['pid'];
                        $rsDelete= mysqli_query($con,$qDelete);
                    }
                        $q="SELECT * FROM  products";
                        $rs=mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['pname'];?></td> 
                                <td><?php echo $row['price'];?></td> 
                                <td><img src="<?php echo $row['img1'];?>"width="100px"></td>
                                <td><?php echo $row['size'];?></td>
                                <td><?php echo $row['colour'];?></td> 
                                <td> <a href="view-product.php?pid=<?php echo $row['pid'];?>"class="btn btn-danger"
                                        onclick="confirm('do you want to delete?')">DELETE</a></td>
                            </tr>
                        <?php } ?>
                        
                </tbody>
            </table>
                  <div>
                     <a href="admin-home.php">Go to Admin home</a>
                     <a href="add-product.php">ADD product</a>
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