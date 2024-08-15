<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>View reviews</title>
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
         <header>View reviews</header>
          
            
            <table class= "table">
                <thead>
                    <tr>
                        <th>sr no</th>
                        <th>message</th>
                        <th>rdate</th>
                        <th>Action</th><br>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['rid'])){
                        $qDelete="DELETE from  reviews where rid=".$_GET['rid'];
                        $rsDelete= mysqli_query($con,$qDelete);
                    }
                        $q="SELECT * FROM reviews";
                        $rs=mysqli_query($con,$q);
                        while($row=mysqli_fetch_array($rs))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['rid'];?></td>
                                <td><?php echo $row['message'];?></td>
                                <td><?php echo $row['rdate'];?></td>
                                <td> <a href="view-reviews.php?rid=<?php echo $row['rid'];?>"class="btn btn-danger"
                                        onclick="confirm('do you want to delete?')">DELETE</a></td>
                            </tr>
                        <?php 
                        }
                     ?>
                        
                </tbody>
            </table>
                  <div>
                     <a href="admin-home.php">Go to Admin home</a>
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