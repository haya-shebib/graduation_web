
<body> 
<h1 class="page-header">
  " DISPLAY  HOLOGRAM VIDEO "   

</h1>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>

	 <form action="" method="post"  enctype="multipart/form-data">

   <div class="col-md-8">

     <div class="form-group">
         <label for="product-title">short pref </label>
          <!-- to make the txt ares less the rows  -->
        <textarea required name="short_desc" id="" cols="30" rows="5" class="form-control"></textarea>
  
       </div>

<aside id="admin_sidebar" class="col-md-4">


    
	 	<input type="file"
	 	       name="my_video">

	 	<input type="submit"
     class="btn btn-primary" 
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


      $sql = query("INSERT INTO holo_vid (short_desc  , video_url) VALUES('{$short_desc}' , '{$new_video_name}' ) ");
            confirm($sql);
            // redirect("index.php?product_p");
            redirect("../demo.php");

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
?>


            


</div>