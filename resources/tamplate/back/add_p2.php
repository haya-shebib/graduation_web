
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>video upload php and mysql</title>
	<style>
		
		* {
           background-color: black;
		}
	</style>
</head>
<body> 

	
<h1 class="page-header">
	"ADD NEW PRODUCT"
</h1>
  <!-- here it goes to the videos show places  -->
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>

	 <form action="" method="post"  enctype="multipart/form-data">


   <div class="col-md-8">

<div class="form-group">
    <label for="product-title">vid Title </label>
        <input type="text" name="video_title" class="form-control">
       
    </div>




     <div class="form-group">
         <label for="product-title">short describtion  </label>
          <!-- to make the txt ares less the rows  -->
        <textarea required name="short_desc" id="" cols="30" rows="5" class="form-control"></textarea>
           

</div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="price" class="form-control"  size="60">
      </div>
    </div>

</div>

<aside id="admin_sidebar" class="col-md-4">

    <div class="form-group">
      <label for="product-title"> count of items  </label>
         <input type="number" name="count"  class="form-control" name="" id="">
    </div> 


    <input type="file"  name="my_image">
    <br>
    <input type="submit" class="btn btn-primary"  name="submit" value="Upload">
</body>
</html>
</aside>
<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {

        $video_title       = escape_string($_POST['video_title']); 
         $price             = escape_string($_POST['price']);
         $count             = escape_string ($_POST['count']);
         $short_desc        = escape_string($_POST['short_desc']);
        $img_name = $_FILES['my_image']['name'];
	      $img_size = $_FILES['my_image']['size'];
	      $tmp_name = $_FILES['my_image']['tmp_name'];
	      $error = $_FILES['my_image']['error'];
	if ($error === 0) {
		if ($img_size > 500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {

				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = 'C:\xampp\htdocs\eco_web\resources\uplod/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

        $sql = query("INSERT INTO videos (video_title , price , count, short_desc  , video_image) VALUES('{$video_title}' , '{$price}' , '{$count}', '{$short_desc}' , '{$new_img_name}' ) ");
        confirm($sql);
            // redirect("index.php?product_p");

      }else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
    	}else {
    		$em = "unknownnnn";
    		// header("Location: index.php?error=$em");
    	}
    } else{
      // echo"no";
  // redirect();

}
?>
