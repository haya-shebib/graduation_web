<?php require_once("../resources/confiq.php")?>
<!-- // this php code help to connect  header to the templets front -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>
<?php 
// if(!isset($_SESSION['name'])){
//     redirect("../../publicfiles");
// }
?>

<section class="services" id="services">

    <!-- Page Content -->
    <div class="container">

        <!-- row start here -->

        <div class="row">
                <div class="row">
              <br><br><br>
              <div class="services-container">

                    <?php 

                        $query = query("SELECT * FROM videos ");
                        // to confirm that quiery is good 
                        confirm($query);
                        // horodoc means that you will put the img in query
                        while($row = fetch_array($query)) {
                        $pro_img = display_img($row['video_image']);                    
                       
                        $video =<<<DELIMETER
                        <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                        <div class="services-box">
                            <a href="item.php?id={$row['id']}"></a>
                            <a href="index.php?edit_p&id={$row['id']}">
                            <img src="../resources/uplod/{$row['video_image']}"  width="300" height="300" alt="">
                          </a>
                            <div class="caption">
                                <h4><a href="item.php?id={$row['id']}">{$row['video_title']}</a> </h4>
                                <a class="btn btn-primary" target="_blank" href="../resources/chart.php?add={$row['id']}">PAY NOW</a>
                                <br>
                                
                                </div>

                                <div class="ratings">
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    4.0 stars
                                </p>
                            </div>
    
                                
                                <a class=" " href="portfolio.php"../publicfiles/ev_detail.php"?id={$row['id']}">Click Me to know more how i work </a>
                
                            </div>
                            </div>
                            </div>


                        DELIMETER;
                            echo $video;
                    
                        }
                    ?>
                       </div>
                    </div> 
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div> 
                <!-- rows end here -->

            </div>

        </div>

    </div>

    <!-- /.container -->
    <!-- //this help to connect the front with footer php -->
    </section>


    <?php include(TEMPLATE_FRONT .DS. "footer.php") ?>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<!-- link for the like image -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">


<?php require_once("../resources/confiq.php");?>

<?php include(TEMPLATE_FRONT .DS. "header.php") ?>
<section class="services" id="services">
    <h2 class="heading">our <span>service</span></h2>
<div class="services-container">
    <div class="services-box">
    <h3>web develop</h3>
    <p>loreupppppppppppppppppppppppppp</p>
    <a href="#" class="btn">read more for our activities </a>
    </div>

    <div class="services-box">
    <h3>graphics</h3>
    <p>loreupppppppppppppppppppppppppp</p>
    <a href="#" class="btn">read more for our activities </a>
    </div>

    <div class="services-box">
    <h3>digital marketing</h3>
    <p>loreupppppppppppppppppppppppppp</p>
    <a href="#" class="btn">read more for our activities </a>
    </div>
</div>
</section>
<section class="trending_container">
<div class="trending_container trending_header">
        <div class="section__nav">
            <span><i class="ri-arrow-left-s-line"></i></span>
            <span><i class="ri-arrow-right-s-line"></i></span>
        </div>
        <h2 class="section_header">trending <span>COLLECTION</span></h2>

</div>
<div class="swiper trending__swiper">
<div class="swiper-wrapper">


<?php 
    // helper function to select the video data
    $query = query("SELECT * FROM videos ");
    // to confirm that quiery is good 
    confirm($query);
    // 
    // horodoc means that you will put the img in query
    while($row = fetch_array($query)) {
    $pro_img = display_img($row['video_image']);
    $video =<<<DELIMETER
    <div class="swiper-slide trending__swiper-slide">
        <div class="trending__card">
            <img src="../upload_vid/event_holo2.png" style="width: 300px; height:300px;">
            <div class="trending__card__content">
                <div class="trending__btns">
                    <button><i class="ri-heart-line"></i></button>
                    <button><i class="ri-shopping-bag-line"></i></button>

                </div>
                <div class="trending__card__details">
                    <h4>nike</h4>
                    <p>boxes size</p>
                    <h3>89000kdd</h3>
                </div>
            </div>
        </div>
    </div>

DELIMETER;
    echo $video;

}
?>
 
  </div>

</div>

</section>


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

