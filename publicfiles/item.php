<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php")?>

<?php  echo "helloo"?>
    <!-- Page Content -->
<div class="container">

       <!-- Side Navigation -->
       <!-- it will open the front with sidenav included  -->
       <?php include(TEMPLATE_FRONT .DS. "side_nav.php") ?>


            <!-- <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="category.html" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div> -->
<?php 
    $query = query("SELECT * FROM videos WHERE id = ". escape_string($_GET['id']) . " ");
    confirm($query);
    // horodoc means that you will put the img in query
    while($row = fetch_array($query)):
    // the ?id will help when i try to touch the img it will show the id

        ?>
<div class="col-md-9">

<!--Row For Image and Short Description-->

 <div class="row">
    


    <div class="col-md-7">
        <!--  to display the img bud the src then as it is return we have to echo it with php and display it  -->
       <img class="img-responsive" src="../resources/<?php echo display_img($row['video_image']); ?>">

    </div>

    <div class="col-md-5">

        <div class="thumbnail">

<!--  write the title for the video -->
    <div class="caption-full">
        <h4><a href="#"><?php echo $row['video_title'];?></a> </h4>
        <hr>

        <h4><a href="#"><?php echo $row['price'];?></a> </h4>

        <hr>
        <!-- the category id of the video from phpadmin -->
        <h4 class=""><?php echo  $row['video_description']; ?>
        </h4>

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
          
        <p><?php echo $row['short_desc']; ?></p>

   
    <form action="">
        <div class="form-group">
<!-- make sure  -->
            <a href="../resources/chart.php?add=<?php echo $row['id']; ?>" class="btn btn-primary "> add</a>
        </div>
    </form>

    </div>
 
</div>

</div>


</div><!--Row For Image and Short Description-->


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<!-- the big description  -->
<p>
   <?php echo  $row['video_description']; ?>
</p>
           
    
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

  <div class="col-md-6">

       <h3>2 Reviews From </h3>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">10 days ago</span>
                <p>This product was great in terms of quality. I would definitely buy another!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">12 days ago</span>
                <p>I've alredy ordered another one!</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                Anonymous
                <span class="pull-right">15 days ago</span>
                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
            </div>
        </div>

    </div>


    <div class="col-md-6">
        <h3>Add A review</h3>

     <form action="" class="form-inline">
        <div class="form-group">
            <label for="">Name</label>
                <input type="text" class="form-control" >
            </div>
             <div class="form-group">
            <label for="">Email</label>
                <input type="test" class="form-control">
            </div>

        <div>
            <h3>Your Rating</h3>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
        </div>

            <br>
            
             <div class="form-group">
             <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
            </div>

             <br>
              <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="SUBMIT">
            </div>
        </form>

    </div>

 </div>

 </div>

</div>


</div><!--Row for Tab Panel-->




</div> 
<!-- COL MD 9 ENDS HERE  -->

<?php  endwhile; ?>
</div>
    <!-- /.container -->

<?php include(TEMPLATE_FRONT .DS. "footer.php") ?>
 
