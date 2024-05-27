
<?php 


if (isset($_POST['submit']) && isset($_FILES['my_video'])) {


        $video_title       = escape_string($_POST['video_title']); 
        //  $short_desc        = escape_string($_POST['short_desc']);
         $video_description = escape_string($_POST['video_description']);

        $video_name = $_FILES['my_video']['name'];
        $tmp_name = $_FILES['my_video']['tmp_name'];
        $error = $_FILES['my_video']['error'];

    if ($error === 0) {
    	$video_ex = pathinfo($video_name, PATHINFO_EXTENSION);
      echo $video_ex;
    	$video_ex_lc = strtolower($video_ex);

    	$allowed_exs = array("mp4", 'webm', 'avi', 'flv');

    	if (in_array($video_ex_lc, $allowed_exs)) {
    		
        $new_video_name = uniqid("video-", true). '.'.$video_ex_lc;

    		// $video_upload_path = '../../../eco_web/resources/video_file/'.$new_video_name;
    		$video_upload_path = '../../resources/uplod/'.$new_video_name;

        move_uploaded_file($tmp_name, $video_upload_path);
        $user=$_SESSION['user_name'];
  
           $sql = query("INSERT INTO videos (userna ,video_title  , short_desc  , video_description , video_url,likes,comment) VALUES('{$user}','{$video_title}'  , '{$short_desc}' , '{$video_description}', '{$new_video_name}' ,'0','0') ");
            confirm($sql);
            // redirect("edit.php?admin_v2");
          redirect("../display_vid.php");

    	}else {
    		$em = "You can't upload files of this type";
    		// header("Location: index.php?error=$em");
    	}
    }
}else{
  echo"no";
  // redirect("index.php?add_p");

	// header("Location: index.php");
}

 ?>
<body>
<div class="container">
<!-- <div class="form">
    <form method="post"  enctype="multipart/form-data" action="">

    <input type="file" name="file">
        <br>
        <input type="text" name="subject" id="subject" placeholder="write description">
        <br>
        <input type="text" name="tittle" id="tittle" placeholder=" descrip the video for what">

        <input type="submit" name="submit" value="Upload">
    </form> -->


</div>
</div>
</body>

<form action="" method="post"  enctype="multipart/form-data">
<div class="col-md-8">

<div class="form-group">
 <label for="product-title">vid Title </label>
     <input type="text" name="video_title" class="form-control">
    
 </div>

 <div class="form-group">
        <label for="product-title">Product Description</label>
   <textarea name="video_description" placeholder="write  your description " id="" cols="30" rows="10" class="form-control"></textarea>
 </div>


  <!-- <div class="form-group">
      <label for="product-title">short pref </label>
     <textarea name="short_desc" id="" cols="30" rows="5" class="form-control"></textarea>
        
     </select>

</div> -->

</div>

<aside id="admin_sidebar" class="col-md-4">

  
  <div class="form-group">


    <!-- <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft"> -->
 </div>

    <input type="file" name="my_video">
    <input type="submit"  name="submit" value="Upload">

  </form>

  <!-- <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form> -->

</body>
</html>
</aside>