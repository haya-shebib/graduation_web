<?php require_once("../resources/confiq.php");?>



 <!-- Bootstrap Core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/shop-homepage.css" rel="stylesheet">


<!-- stylee css  -->
<link href="css/style.css" rel="stylesheet">


<link href="css/newshop.css" rel="stylesheet">



<link href="  C:/xampp/htdocs/eco_web/publicfiles/admin/css/bootstrap.css" rel="stylesheet">





    <!-- Page Content -->
    <div class="container">

      <header>
           
            <h1 class="text-center">Login</h1>

             <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
            <?php
            if(isset($error)){
                foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>'; }
                
            } ?> 
            <?php 
      

        
          if(isset($_POST['submit'])){
                // if($_SERVER['REQUEST_METHOD']=="post"){
                    // $name = escape_string($_POST['name'] );
                    $email = escape_string($_POST['email']);
                    $pass = escape_string($_POST['password']);
                    // $cpass = escape_string($_POST['cpassword']);
                    // $user_type = $_POST['user_type'];
                    
                // $select = query(" SELECT  email FROM user WHERE email = ? " );
                $select = query(" SELECT  * FROM user WHERE email = '$email' && password='$pass' " );

                confirm($select);

                    if(mysqli_num_rows($select) > 0){  
                     $row = fetch_array($select);
                    // $row = mysqli_num_rows($select);
        
                     echo $row['name']; 

                      if($row['user_type'] == 'user'){
        
                        $_SESSION['user_name'] = $row['name'];
                        // $_SESSION['user_name'] =$email;

                        $_SESSION['user_img'] = isset( $row['user_img']) ? $row['user_img'] : null ;
                                
        
                        //  redirect("user_login.php");
                        redirect('../publicfiles/admin/edit.php');

                     }elseif($row['user_type'] == 'admin'){
                       $_SESSION['admin_name'] = $row['name'];
                    //    $_SESSION['admin_name'] = $email;
                       redirect("admin");     
                }
            }else{
                    $error[] = 'incorrect email or password!';
                    echo "incorrect email or password!";
                    // redirect("login.php");    
 
                    // exit;
                } 

            }
            ?>
           

                <div class="form-group"><label for="email">
                     email<input type="email" name="email" class="form-control"  >
                    </label>
                </div>
                  
                 <div class="form-group"><label for="password">
                    Password<input type="text" name="password" class="form-control">
                   </label>
                </div>
               
                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>

                <div class="form-group">
                <p>don't have an account? <a href="register.php">register now</a></p>

                </div>

            </form>
        </div> 
        
        


    </header>


        </div> 

    </div> 
    
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT .DS. "footer.php") ?>

</html>


