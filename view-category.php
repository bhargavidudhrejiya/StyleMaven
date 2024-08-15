<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>View category</title>
      <link rel="stylesheet" href="user_login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
</style>
    </head>
    
   <body>
      <div class="container">
      <div class="scroll">
         <header>View category</header>
          
            
            <table class= "table">
                <thead>
                    <tr>
                        <th>sr no</th>
                        <th>name</th>
                         
                        <th>Action</th><br>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['cat_id'])){
                        $qDelete="DELETE from  category where cat_id=".$_GET['cat_id'];
                        $rsDelete= mysqli_query($con,$qDelete);
                    }
                        $q="SELECT * FROM category";
                        $rs=mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['cat_id'];?></td>
                                <td><?php echo $row['cat_name'];?></td>
                                
                                <td> <a href="view-category.php?cat_id=<?php echo $row['cat_id'];?>"class="btn btn-danger"
                                        onclick="confirm('do you want to delete?')">DELETE</a></td>
                            </tr>
                        <?php 
                        }
                     ?>
                        
                </tbody>
            </table>
                  <div>
                     <a href="admin-home.php">Go to Admin home</a>
                     <a href="add-category.php">Add category</a>
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