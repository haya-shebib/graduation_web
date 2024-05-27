<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<!-- link for the like image -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

<!-- link the script page  -->

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<?php require_once("../resources/confiq.php")?>

<?php include(TEMPLATE_FRONT .DS. "header.php") ?> 
<br>
<br>
<br>
<br>

<!-- 00000000000000000000000000 -->
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
        <a href="index.php?edit_p&id={$row['id']}">
        <video width="300" height="200" controls>
            <source src="../resources/uplod/{$row['video_url']}" type="video/mp4">
        </video>
        </a>           
        <div class="trending__card__content">
            <div class="trending__btns">
                <button><i class="ri-heart-line"></i></button>
                <button><i class="ri-shopping-bag-line"></i></button>

            </div>
            <div class="trending__card__details">
                <h4><a href="item.php?id={$row['id']}">{$row['video_title']}</a> </h4>
                <a class="btn btn-primary" target="_blank" href="../resources/chart.php?add={$row['id']}">View hologram</a>
                <h4>{$row['short_desc']}</h4>
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