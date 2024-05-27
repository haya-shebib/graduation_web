
<?php require_once("../resources/confiq.php")?>

<?php include(TEMPLATE_FRONT .DS. "header.php") ?> 
<!DOCTYPE html>
<html lang="en">
<head>

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

</style>
</head>
<body>
<br><br><br><br><br><br>



<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
<img src="../upload_vid/medical_page.png" style="width:100%;">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>speech  holo</h3>
      <p><b>The future is here: Plug-and-play hologram technology is now accessible for meetings and events. To find out more about how it works and why it stands to revolutionize the audience experience, Skift Meetings sat down with ARHT Media, a leading supplier of hologram technology.!</b></p>   
    </div>
  </div>
  
  <div class="mySlides w3-display-container w3-center">
    <img src="../upload_vid/heart.png" style="width:100% ">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>SERVICE</h3>
      <p><b>FULL-SERVICE RENTAL Holographic display rental. Development of bespoke 3D content.Technical installation and take down. Interactive hologram.Branding foils.Freight and logistics.
      </b></p>    
    </div>
  </div>

    </div>

    <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

<!-- service -->


<!--  -->


<section class="services" id="services">
    <h2 class="heading">our <span>service</span></h2>
<div class="services-container">
    <div class="services-box">
    <style>
    /* Add this style to make the icon bigger */
    .fa-users {
        font-size: 30px; /* Adjust the size as needed */
        color: #fff;
    }
</style>
    <i class="fa fa-users" aria-hidden="true"></i>

    <h3>RENT AVAILABLILTY </h3>
    <BR></BR>
    <p>Suitable for Large event expos 3 x 5 meters.Unique ability to create a human hologram. vailable for rent -DeepFrame One display Rental periods From 1 week up to 6 months. </p>
    <BR></BR>
    <a href="#contact" class="btn btn-primary">ASK FOR A RENT  </a>
    </div>
<!-- 2 -->
    <div class="services-box" >
    <style>
    /* Add this style to make the icon bigger */
    .fa-eye {
        font-size: 30px; /* Adjust the size as needed */
        color: #fff;
    }
</style>
    <i class="fa fa-eye" aria-hidden="true"></i>
    <h3 >Give you to virtual world</h3>
    <BR></BR>
    <p> Connect with your audience on a more personal level using your brand ambassador or employee. </p>
<BR></BR>
    <a href="#videos" class="btn btn-primary">LOOK MORE OF OUR WORK  </a>

    </div>
    <!-- 3 -->
    <div class="services-box" >
    <style>
    /* Add this style to make the icon bigger */
    .fa-eye {
        font-size: 30px; /* Adjust the size as needed */
        color: #fff;
    }
</style>
    <i class="fa fa-eye" aria-hidden="true"></i>
    <h3 > HARDWARE SMARTV  Hologram </h3>
    <BR></BR>
    <p> This harware holographic projectors, allowing speakers, performers, or products to come to life in a way that traditional events </p>
<BR></BR>
    <a href="#hardware2" class="btn btn-primary">SEE  ITS HARDWARE  </a>

    </div>

  
</div>
</section>

<!-- video -->
<section class="trending_container" id="videos">

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


<div class="swiper trending__swiper">
<div class="swiper-wrapper">

    <div class="swiper-slide trending__swiper-slide">
        <div class="trending__card">
        <video controls style="width: 400px; height:400px;">
            <source src="../upload_vid/medical_vid4.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
          
        </div>
    </div>
    <!-- second video -->
    <div class="swiper-slide trending__swiper-slide">
        <div class="trending__card">
        <video controls style="width: 400px;  height:400px;">
            <source src="../upload_vid/medical_vid3.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
          
        </div>
    </div>
    <!-- third video -->
    <div class="swiper-slide trending__swiper-slide">
        <div class="trending__card">
        <video controls style="width: 400px;  height:400px;">
            <source src="../upload_vid/medical_vid1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
           
        </div>
    </div>
    <!-- 4 video -->
    <div class="swiper-slide trending__swiper-slide">
        <div class="trending__card">
        <video controls style="width: 400px; height:400px;">
            <source src="../upload_vid/medical_vid2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
           
        </div>
    </div>
   
  </div>

</div>
<div class="trending_container trending_header">
  <h2 class="section_header">Holographic  "IN MEDICAL CONFERENCES" <span> & "Education" & "Automotive "</span></h2>
  <br><br>
  <br>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- <script src="../publicfiles/js/script.js"></script> -->
<script>


    // for movint the page 
const trendingSwiper = new Swiper(".trending__swiper", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 50,
  });
</script>


</section>
<!-- 00000000000000 -->

<section class="home" id="hardware2">
  
<div class="about-content">
  
  <BR></BR>
  <!-- <h3><span> on single  solo display </span></h3> -->

  <p><span>1;HARDWARE </span>  SIZE 3D Holographic IN  SmartV HOLOGRAM </p>
  <p><span>2; CONTENT</span> WE COSTOMISE YOUR 3D CONTENT FOR MEDICAL AND EDUCATIONAL CONFERENCE  </p>
              <p><span>3; </span> Can be seen on the wall  </p>
              <p><span>4; </span> Produces the visual you see</p>

                <div class="social-media">
           
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>              

                  </div>
                  <a href="#contact" class="btn btn-primary">GET IT    </a>

            </div>
            <div class="home-img">
            <img src="../upload_vid/acces_img.png" style="width: 600px; height: 600px; ">
           
          </div>
          <div class="home-img">
            <img src="../upload_vid/holo_wall.png" style="width: 600px; height: 600px; ">
          </div>

    </section>
<!-- 00000000000000000000000000000000000000000000000-->



<!-- contact section -->
<section class="contact" id="contact">
<?php include '../publicfiles/sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
   
      <div class="contact-form">
        <h2>CONTACT US FOR YOUR COMING EVENT </h2>
        <form class="contact" action="" method="post">

        <style>
              body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff; /* White background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Light shadow */
        }

        h2 {
            font-size: 24px;
            color: white; /* Dark gray text color */
            margin-bottom: 15px;
        }

        .text-box, .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #666; /* Gray border */
            border-radius: 5px;
            font-size: 16px;
            color: white; /* Dark gray text color */
            box-sizing: border-box;
        }

        .text-box:focus, .form-control:focus {
            border-color: #4CAF50; /* Green border on focus */
        }

        /* Submit button styles */
        .submit-btn {
            background-color: #4CAF50; /* Green button color */
            color: #fff; /* White text color */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }

    </style>

          <h2><input style="background-color:#000075;"  type="text" name="name" class="text-box" placeholder="Your Name" required></h2>
          <h2><input  style="background-color:#000075;" type="email" name="email" class="text-box" placeholder="Your Email" required></h2>
          <h2><textarea style="background-color:#000075;"  name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea></h2>
          <h2><input   style="background-color:#000075;" type="date" name="date"  class="text-box"  required></h2>
          <h2> <button ><input  type="submit" name="submit" class="send-btn btn-primary" value="Send"></h2></button>
        </form>
      </div>
    </div>
    <!--contact section end-->



    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</section>



<!-- 00000000000000000000000000000000000000000000000-->

<section class="services" id="services">
  <div class="home-content">
                <h3><span>READ MORE ON SIMILAR EVENTS </span></h3>
</div>
<div class="services-container">
    <div class="services-box">
    <h3>Smart3d</h3>
    <a href="../publicfiles/smart3d.php">

    <img src="../upload_vid/event_car2.png" style="width:100%; height:50%;"  alt="">
    <p>Suitable for Large event spaces, airports, expos of min. 3 x 5 meters, staffed brand activations.Unique ability to create a human hologram. vailable for rent -DeepFrame One display Rental periods From 1 week up to 6 months. 
 </p>
    </div>
    <div class="services-box">
    <h3>holobox 3D</h3>
    <a href="../publicfiles/box_holo.php">
    <img src="../upload_vid/event_car.png" style="width:100%; height:50%;"alt=""></a>
    <h4>Read more on the Holobox that we have </h4>
    <!-- <a href="../publicfiles/about.php" class="btn">read more for our activities </a> -->
    </div>
    <div class="services-box">
    <h3>solotv 3D</h3>
    <a href="../publicfiles/ev_detail.php">

    <img src="../upload_vid/heart.png" style="width:100%; height:50%;"alt="">
    <h4>Built for large event spaces and expos. 4-sided viewing. Built to run 24/7.Large side surfaces for maximum exterior branding. </h4>
    <!-- <a href="#" class="btn">read more for our activities </a> -->
    </div>
    
  </section>

</div>



