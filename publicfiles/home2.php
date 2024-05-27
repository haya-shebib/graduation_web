

<!-- <section class="home" id="home">
            <div class="home-content">
                <h3>hello it me </h3>
                <h1>haya</h1>
                <h3>i am <span>the developer of my company</span></h3>
                <p>lorem    lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem
                </p>
                <div class="social-media">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
                <a href="#" class="btn"> down;oad cv</a>
            </div>
            <div class="home-img">
                <img src="../upload_vid/photo1.jpg" alt=""style="width: 200px; height: auto;">
            </div>

    </section>


    
<section class="about" id="about"> 
    <div class="about-img">
        <img src="../upload_vid/istockphoto-974238866-612x612.jpg" alt="">
    </div>
    <div class="about-content">
        <h2 class="heading">about <span>us</span></h2>
        <h3>frontent</h3>
        <p>Event Photos, Download The BEST Free Event Stock Photos & HD Images</p>
        <a href="#" class="btn">read  more about us </a>

    </div>


   


</section> -->
<?php require_once("../resources/confiq.php");?>
 <!-- Bootstrap Core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/shop-homepage.css" rel="stylesheet">


<!-- stylee css  -->
<link href="css/style.css" rel="stylesheet">


<link href="css/newshop.css" rel="stylesheet">



<link href="  C:/xampp/htdocs/eco_web/publicfiles/admin/css/bootstrap.css" rel="stylesheet">





<section>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<style>
   body {
	margin: 0;
	padding: 0;
    box-sizing: border-box;
    align-items: center;
    min-height: 100vh;
    background: black;
    
}
.zoom  {
	height: 700px;
    width: 100%;
	overflow: hidden;
	position: relative;

}

div img {
	width: 100%;
	position: absolute;
	top: 0;
	left: 50%;
	transform: translate(-50%);
}
.main-text {
	text-align: center;
    background-color: black;
}
.main-text h2 {
	font-family: 'Merienda', cursive;
	font-size: 40px;
    color: white;
}
.main-text p {
	font-size: 25px;
	font-family: 'Roboto', sans-serif;
	line-height: 35px;
    color: white;

}
:root{
    --x:45deg;
}
/* button css */
a{
    position: relative;
    width: 150px;
    height: 55px;
    display: inline-block;
    border-radius: 5px;

}
a i {
    position: absolute;
    inset: -2px;
    display: block;
    border-radius: 5px;  

}
a i, a i:nth-child(2){
background: linear-gradient(var(--x),#00ccff,#0e1538,#0e1538,#d400d4);
}
a i:nth-child(2){
filter: blur(10px);
}
a span{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    color: white;
    letter-spacing: 2px;
    border: 1px solid #040a29;
    border-radius: 3px;
    background: rgba(14, 21, 56, 0.65);
    overflow: hidden;
    
}
a span::before{
    content:'' ;
    position: absolute;
    top: 0;
    left: -50%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.075);
    transform: skew(25deg);


}

</style>

  <!-- divinectorweb.com -->

<body>
    
    <div class="zoom" id="zoom"><img src="../upload_vid/new-3d-live-hologram-t.jpg"></div>

	<div class="main-text" id="main-text">
		<h2>Welcome to "HOLO" Where Reality Meets Innovation!</h2>
        <p> Unlike traditional photographs or images.</p>

        <p> You can Step into a real where imagination materializes and reality takes on a whole new dimension.</p>
        <p> At "HOLO.FUTURE", we invite you to explore the fascinating world of holographic technology, where light becomes art, and innovation knows no bounds.</p>
         <a href="#login">
            <i></i><i></i>
            <span>login</span>
         </a>
<hr>
	</div>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            $(".zoom img").css({
                width: (100 + scroll / 5) + "%"
            })
        });
        let btn= document.querySelector('a');
        btn.addEventListener('mousemove',e=>{
            let rect = e.target.getBoundingClientRect();
            let x = e.clientX - rect.left;
            btn.style.setProperty('--x', x + 'deg');
        })

    </script>
</body>

</section>


<section class="login" id="login">



    <!-- Page Content -->
    <div class="container">

      <header>
           
            <h1 class="text-center" id="text-center">Login</h1>

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






</section>
