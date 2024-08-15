<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>registeration form </title>
      <link rel="stylesheet" href="user_login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <style>
       .container{
            width: 350px;
            height: 500px;
            
        }
.scroll{
    
    height: 500px;
    overflow-y: scroll; 
}

      </style>
   </head>
   <body>
      <div class="container">
      <div class="scroll">
         <header>Register form</header>
         <div class="form-outer">
            <form action="register-code.php" method="POST">
               <div class="page slide-page">
                  <div class="field">
                     <div class="label">
                         Name
                     </div>
                     <input type="text" name="name"  required>
                  </div>


                  <div class="field">
                     <div class="label">
                         email
                     </div>
                     <input type="email" name="email" required>
                  </div>

                  <div class="field">
                     <div class="label">
                         contact number
                     </div>
                     <input type="number" name="contact_number" required>
                  </div>

                  <div class="field">
                     <div class="label">
                         Address
                     </div>
                     <input type="text" name="address" required>
                  </div>

                  <div class="field">
                     <div class="label">
                         Password
                     </div>
                     <input type="password" name="password" required>
                  </div>

                  <div class="field btns">
                     <button class="submit">Submit</button>
                  </div>

               </div>
            </form>
         </div>
</div>
      </div>
      <script src="login_java.js"></script>
   </body>
</html>