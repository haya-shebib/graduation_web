 <?php require_once("../resources/confiq.php");?>
 <?php include(TEMPLATE_FRONT .DS. "header.php"); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">


    <style>
   body{
      background-color: black;
   }
    </style>
<?php 
if(isset($_POST['submit'])){

   $name = escape_string($_POST['name']);
   $email = escape_string($_POST['email']);
   $pass = escape_string($_POST['password']);
   $cpass = escape_string($_POST['cpassword']);
   $user_type = escape_string($_POST['user_type']);
   $error=array();
   $select = query(" SELECT * FROM user WHERE email = '$email' && password = '$pass' ");
    confirm($select);

   if(mysqli_num_rows($select) > 0){

      $error['s'] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = query("INSERT INTO user(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')");
          confirm($insert) ;  
          if($insert)  {
            echo "<script>alert('you uploaded ')
            </script>";
            redirect("login.php");

          }

      }
   }

};

 
 ?>
 

 <div class="form-container">
 <br>
 <br>
 <br>
 <br>
    <form action="" method="post">
       <h3>REGISTER NOW</h3>
       <?php
       if(isset($error['s'])){
         $show=" <h4 class='alert alert-danger'>".$error['s']."</h4> ";
         //  foreach($error as $error){
         //     echo '<span class="error-msg">'.$error.'</span>';
         //  };
       };
       ?>
       <br>
       
       <input type="text" name="name" required placeholder="enter your name">
       <input type="email" name="email" required placeholder="enter your email">
       <input type="password" name="password" required placeholder="enter your password">
       <input type="password" name="cpassword" required placeholder="confirm your password">
       <select name="user_type">
          <option value="user">user</option>
          <option value="admin">admin</option>
      </select>
       <input type="submit" name="submit" value="register now" class="form-btn">
       <p>already have an account? <a href="login.php">login now</a></p>
    </form>
 
 </div>
 
 </body>
 </html>
