<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>




<section>  
<?php 
error_reporting(E_ALL);
if(isset($_POST['update'])){

    $update_name = $_POST['update_name'];
    $user_email = $_POST['user_email'];
    $user_img = $_FILES['user_img'];



    if(!empty($update_name) && !empty($user_email) ){
        // var_dump($user_img);
        $file_name = $user_img['name'];
        $file_type = $user_img['type'];
        $size=$user_img['size'];

        $file_tmp_data=$user_img['tmp_name'];
        $file_error=$user_img['error'];


       $file_data = explode('/',$file_type);
       $file_extenstion= $file_data[count($file_data)-1];
//        print_r($file_data);
//        exit;

       if($file_extenstion =='jpg' || $file_extenstion =='jpeg' || $file_extenstion =='png'){
        
        if($size<50000000){
                // var_dump($size);

                // $file_new= "C:/xampp/htdocs/eco_web/resources/uplod/" . $file_name;
                $file_new= "../resources/up/" . $file_name;


                $uplo= move_uploaded_file( $file_tmp_data, $file_new);

                if($uplo){
                    echo"<script>alert('update')</script> ";
                        echo "yes yes ";
                        $lo=$_SESSION['user_name'];

                        
                        echo "$lo";


                        $sql= query("UPDATE user SET  name = '$update_name'  , email = '$user_email' , user_img = '$file_name' WHERE name = '$lo'");
                       
                        confirm($sql);
                        if ($sql) {
                                $affected_rows = mysqli_affected_rows($connection);
                                if ($affected_rows > 0) {
                                    // The UPDATE query was successful and at least one row was updated.
                                    echo "Update successful!";
                                } elseif ($affected_rows === 0) {
                                    echo"<script>alert('NOT FULL')</script> ";

                                    // No rows were updated, but the query executed without errors.
                                    echo "No records were updated.";
                                } else {
                                    // An error occurred during the query execution.
                                    echo "Update failed: " . mysqli_error($connection);
                                }
                            } else {
                                // Query execution failed.
                                echo "Query failed: " . mysqli_error($connection);
                            }
                            
                        // echo"updated";       
                         header("Location: " . $_SERVER['PHP_SELF'] . "?success=updated");
                        // var_dump($_SESSION['user_name']);  
                        exit;             
                }


        }else{
                echo"not size ";
                header("Location: " . $_SERVER['PHP_SELF'] . "?error=invalid_size");

                exit;


        }
        
        
        // var_dump($size);
}else{
        echo "error";
        echo " invalid";
        redirect('../publicfiles/show.php');
        header("Location: " . $_SERVER['PHP_SELF'] . "?error=invalid");
        exit;
        }
        }else{
        echo "missing input";
        // redirect('edit.php');
        header("Location: " . $_SERVER['PHP_SELF'] . "?error=emptyname");

        // redirect('C:\xampp\htdocs\eco_web\resources\tamplate\back_user\admin_view.php?error=emptyname');
        exit;
   
    }




}

?>


<div class="col-md-12">

<div class="row">
      
<hr> <h3>UPDATE YOUR  INFORMATION </h3>
        <div class="col-lg-4 col-md-6 ">
                <?php
                 if(isset($_GET['success'])){
                        if($_GET['success'] == 'updated'){
                                ?>       
                                <small class="alert alert-danger">  success message </small>

                                <hr>
                                
                                <?php   
                                     
                 }
                }

                 if(isset($_GET['error'])){
                        if($_GET['error'] == 'emptyname'){
                 ?>       

                <small class="alert alert-danger"> name and email needed </small>
                <hr>
                <?php 
                } else if($_GET['error'] == 'invalid'){
                        ?>       
                <small class="alert alert-danger"> valid image </small>
                <hr>
                <?php 
                }else if($_GET['error'] == 'invalid_size'){
                        ?>       
                        <small class="alert alert-danger"> invalid size image </small>
                        <hr>
                        <?php 
                }
  }
                ?>
                <form action=""  method="POST" enctype="multipart/form-data">
                <?php 
                 dis();
                ?>
</form>
         </div>

</div>


</section>



<section>
	<?php if (isset($_GET['error'])) {  ?>
		<p><?=$_GET['error']?></p>
	<?php } ?>

	 <form action="" method="post"  enctype="multipart/form-data">

   <div class="col-md-8">
   <hr> <h3>WRITE ANY FEEDBACKS </h3>

   <label for="product-title"> <span>LEAVE YOUR COMMENT </span></label>

     <div class="form-group">
          <!-- to make the txt ares less the rows  -->
        <textarea  name="short_desc" id=""  placeholder=" Comment here  " cols="30" rows="5" class="form-control"></textarea>
           
</div>

<div class="form-group">
<input type="submit" class="btn btn-info"
	 	       name="submit" 
	 	       value="submit">
                                </div>

	 
	 </form>

</body>
</html>
</aside>
<?php 

if (isset($_POST['submit']) ) {

       
         $short_desc    = escape_string($_POST['short_desc']);

        $id =$_POST['id'];

        $user=$_SESSION['user_name'];


      $sql = query("INSERT INTO vid (userna,user_com ,short_desc  ) VALUES('{$id}','{$user}','{$short_desc}'  ) ");
            confirm($sql);
            redirect("../publicfiles/display_vid.php");
}else{
//   echo"no";

	// header("Location: index.php");
}
?>
</section>


<hr>
<section>
    

<div id="main">
        <h1 style="background-color: aliceblue; color:white;">
    <?php
   $_SESSION['user_name']; 
    ?>
    <!-- online -->
    </h1>
    <div class="output">  
        <?php 
        // chat();
           ?>

    </div>
        
          
   <?php
 
    if (isset($_POST['submit']))
{
    // $id =$_POST['id'];
    $user=$_SESSION['user_name'];
 
    $msg       = ($_POST['msg']); 
    $sql = query("INSERT INTO posts (user_com ,msg)  VALUES('{$user}','{$msg}')");
    confirm($sql);
    redirect("user_edit.php");
}  
   ?>

<form action="" method="post"  enctype="multipart/form-data">
<hr> <h3>ASK ANYTHING  FOR THE ADMIN  </h3>
<label for="product-title"><span>LEAVE YOUR COMMENT </span> </label>

<div class="form-group">

      <textarea placeholder="write your msg for admin " name="msg" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="submit" class="btn btn-info"
	 	       name="submit" 
	 	       value="submit">
</form>


</section>
            
