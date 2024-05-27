<?php require_once("../resources/confiq.php")?>
<!-- // this php code help to connect  header to the templets front -->
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>
<?php 
// if(!isset($_SESSION['name'])){
//     redirect("../../publicfiles");
// }
?>

    <!-- Page Content -->
    <div class="container">

        <!-- row start here -->

        <div class="row">
            <!-- catogory  for side nav -->
            <?php include(TEMPLATE_FRONT .DS. "side_nav.php") ?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                    <?php include(TEMPLATE_FRONT .DS. "slide.php") ?>

                    </div>

                </div>

                <div class="row">
                <h1><?php  
                ?></h1>
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
                          <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                    
                            <a href="item.php?id={$row['id']}">
                            </a>
                            <a href="index.php?edit_p&id={$row['id']}">
                            <img src="../resources/uplod/{$row['video_image']}" alt="">

                          </a>
                            <div class="caption">
                                <h4 class="pull-right">{$row['video_title']}</h4>
                                <h4><a href="item.php?id={$row['id']}">{$row['video_title']}</a> </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                                <a class="btn btn-primary" target="_blank" href="../resources/chart.php?add={$row['id']}">View hologram</a>
                            </div>
                    
                            <!-- rating  -->
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>;
                                    <span class="glyphicon glyphicon-star"></span> 
                                    </p>
                                </div>
                            </div>
                        </div>
                        DELIMETER;
                            echo $video;
                    
                        }
                    ?>
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
    
    <?php include(TEMPLATE_FRONT .DS. "footer.php") ?>
