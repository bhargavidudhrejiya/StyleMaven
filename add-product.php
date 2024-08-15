<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Add product form </title>
      <link rel="stylesheet" href="user_login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
         .container{
            width: 400px;
            height: 450px;
            
        }
.scroll{
    
    height: 350px;
    overflow-y: scroll; 
}
         </style>
   </head>

   <body>
      <div class="container">
         <header> Add product form</header>
         <div class="scroll">
         <div class="form-outer">
            <form action="add-product-code.php" method="POST" enctype="multipart/form-data" >
               <div class="page slide-page">
                   
                  <div class="field">
                     <div class="label">
                          Product Name
                     </div>
                     <input type="text" name=" pname"required>
                  </div>
                
                  <div class="field">
                     <div class="label">
                          Price
                     </div>
                     <input type="text" name="price"required>
                  </div>

                   

                  <div class="field">
                     <div class="label">
                           Image 1
                     </div>
                     <input type="file" name="img1"  required>
                  </div>
                  
                  <div class="field">
                     <div class="label">
                           Size
                     </div>
                     <input type="text" name="size"required>
                  </div>

                  <div class="field">
                     <div class="label">
                           Color
                     </div>
                     <input type="text" name="color"required>
                  </div>

                  <div class="field btns">
                     <button class="submit">Add</button>
                  </div>
                  <div>
                     <a href="admin-home.php">Go to Admin home</a>
                  </div>
</div>
               </div>
            </form>
         </div>
      </div>
      <script src="login_java.js"></script>
   </body>
</html>