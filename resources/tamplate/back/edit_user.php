<?php 
  add_vid();

// check if we have product 
if (isset($_GET['id'])){
   $query= query("SELECT * from videos WHERE video_category_id  = ".escape_string($_GET['id'])." ");
   confirm($query);
   while($row = fetch_array($query)){
    $video_title       = escape_string($row['video_title']); 
    $price             = escape_string($row['price']);
    $video_category_id = escape_string ($row['video_category_id']);
    $count             = escape_string ($row['count']);
    $short_desc        = escape_string($row['short_desc']);
    $video_description = escape_string($row['video_description']);
    $video_image       = escape_string($row['video_image']);

    // display img inside  if 
    $pro_img = display_img($row['video_image']);


   }
  //  update_vid();

}

 ?>
<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   edit 
  

</h1>
</div>
               

<!-- mult part to put upload of pic of file  -->
<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-8">

<div class="form-group">
    <label for="product-title">vid Title </label>
        <input type="text" name="video_title" class="form-control" value="<?php echo $video_title; ?>">
       
    </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="video_description" id="" cols="30" rows="10" class="form-control" ><?php echo $video_description; ?></textarea>
    </div>

     <!-- Product Categories-->

     <div class="form-group">
         <label for="product-title">short pref </label>
          <!-- to make the txt ares less the rows  -->
        <textarea name="short_desc" id="" cols="30" rows="5" class="form-control"><?php 	echo $short_desc; ?></textarea>
           
        </select>


</div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="price" class="form-control" size="60" value="<?php echo $price;  ?>">
      </div>
    </div>




    
    

</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="update" class="btn btn-primary btn-lg" value="update">
    </div>


     <!-- Product Categories -->

     <div class="form-group">
         <label for="product-title">Product Category</label>
        <select name="video_category_id" id="" class="form-control" >
            <option value=""><?php show_including_add_pro($video_category_id);?></option> 
            <?php show_including_add_pro();?>
        </select> 
</div> 





     <!-- the vid count -->


    <div class="form-group">
      <label for="product-title"> count of items  </label>
         <input type="number" name="count"  class="form-control"  id="" value="<?php echo $count;  ?>">
    </div> 


<!-- Product Tags -->


    <!-- <div class="form-group">
          <label for="product-title">Product Keywords</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div> -->

    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file"><br>
        <img width="140" src="../../resources/<?php echo $pro_img;  ?>" alt="">
      
    </div>



</aside><!--SIDEBAR-->


    
</form>



            
