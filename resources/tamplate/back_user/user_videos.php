
<body> 
  <!-- here it goes to the videos show places  -->
	<a href="index.php?product_p">Videos</a>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>

	 <form action="" method="post"  enctype="multipart/form-data">

   <div class="col-md-8">

     <div class="form-group">
         <label for="product-title">short pref </label>
          <!-- to make the txt ares less the rows  -->
        <textarea name="short_desc" id="" cols="30" rows="5" class="form-control"></textarea>
           
</div>

<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">

     <!-- <input type="submit" name="submit" value="UPLOAD"> -->

       <!-- <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft"> -->
        <!-- <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Upload"> -->
    </div>
    
	 	<input type="file"
	 	       name="my_video">

	 	<input type="submit"
	 	       name="submit" 
	 	       value="Upload">
	 </form>

</body>
</html>
</aside>
<?php 

if (isset($_POST['submit']) && isset($_FILES['my_video'])) {

       
         $short_desc        = escape_string($_POST['short_desc']);

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

    		$video_upload_path = 'C:\xampp\htdocs\eco_web\resources\uplod/'.$new_video_name;
    		move_uploaded_file($tmp_name, $video_upload_path);
        $id =$_POST['id'];

        $user=$_SESSION['user_name'];


      $sql = query("INSERT INTO vid (userna,user_com ,short_desc  , video_url) VALUES('{$id}','{$user}','{$short_desc}' , '{$new_video_name}' ) ");
            confirm($sql);
            // redirect("index.php?product_p");
            redirect("../display_vid.php");
    	}else {
    		$em = "You can't upload files of this type";
    		// header("Location: index.php?error=$em");
    	}
    }


}else{
  // echo"no";
  // redirect("index.php?add_p");

	// header("Location: index.php");
}


            
