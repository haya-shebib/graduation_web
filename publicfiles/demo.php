
<?php require_once("../resources/confiq.php")?>

<?php include(TEMPLATE_FRONT .DS. "header.php") ?> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <style>
    h1{
      text-align: center;
    }
    .jumbotron .hero-spacer{
      padding: 40px;
    }

    .text-box {
      /* Common styling for the text input */
      padding: 10px;
      font-size: 16px;
      width: 300px; /* Adjust the width as needed */
      background-color: black; 
      border:   2px solid #007bff;
;

    }

   /* Additional styling for the search input */
   .text-box:focus {
      outline: none;
      border: 2px solid #007bff; /* Change the border color on focus */
    }
    .jumbotron{
      background-color: #007bff;
    }
    
  </style>
  <header class="jumbotron hero-spacer">
      <h1 class="h1"> videos displays!</h1>
  </header>

<div class="container">
   <form method="post">
      <input type="text" required placeholder="search video" name="search" class="text-box">
      <button class="btn btn-dark btn-primary" name="submit">search</button>
   </form>
   <div class="container my-5">
      <table class="table">
         <?php
          if(isset($_POST['submit'])){
            $search = $_POST['search'];
            $sql =query ("SELECT * FROM holo_vid  where  id like '%$search%' or short_desc like '%$search%' ");
             confirm($sql);
            if($sql){
               if(mysqli_num_rows($sql)>0){
                  echo '
                  <thead>
                  <tr>
                  <th>describtion</th>
                  </tr>
                  </thead>
                  ';
                  while($row = mysqli_fetch_assoc($sql)) {
                  echo '<tbody>
                  <tr>
                  <td>'.$row['short_desc'].'</td>
                  <td>
                  <video width="300" height="200" controls>
                    <source src="../resources/uplod/' . $row['video_url'] . '" type="video/mp4">
                  </video>
        </td>
                  </tr>
                  </tbody>';
               }

               }else{
                  echo '<h2 class=text> NOT FOUND </h2>';
               }
               
            }

         } 
         ?>
      


        
      </table>

   </div>
</div>

  
  <section class='trending_container' id='trending_container'>
   <div class='swiper trending__swiper'>
   <div class='swiper-wrapper'>
  <?php 

$sql =query ("SELECT * FROM holo_vid  ORDER BY id ");
// to confirm that quiery is good 

confirm($sql);

$output = '';

if (mysqli_num_rows($sql) > 0) {

$output .= " <h2 class='text-center'>  </h2> ";

    while ($row = mysqli_fetch_assoc($sql)) { 

      $video =<<<DELIMETER
      
     

    <div class='swiper-slide trending__swiper-slide'>
        <div class='trending__card'>

        <a href='index.php?edit_p&id={$row['id']}'>
        <video width='300' height='200' controls>
        <source src='../resources/uplod/{$row['video_url']}' type='video/mp4'>
      </video>
    </a> 
    <h2>{$row['short_desc']}</h2>

        </div>
    </div>
DELIMETER;
echo $video;

}
}
?>
  </div>

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

<section class="services" id="services">
    <!-- <h2 class="heading">THE <span>STEPS  </span></h2> -->
<div class="services-container">

    <!-- 1 -->

    <div class="services-box">
    <style>
    /* Add this style to make the icon bigger */
    
</style>

    <h3> PYRAMID STEPS</h3>
    <img src="../upload_vid/pyramid_holo.png" style="width: '200'  height='200' " alt="">
    <h1> 1 :  Projects the image on the screen upright</h1>
    <h1> 2 : Allows the background objects to be seen through it.</h1>
    <h1>3 : display the video on the hologram </h1>
    <BR></BR>
    <a href="#contact" class="btn btn-primary">ASK FOR A RENT  </a>
    </div>

    <!-- 3 -->


  
</div>
</section>