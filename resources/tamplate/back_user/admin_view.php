
<?php 
error_reporting(E_ALL);
if(isset($_POST['update'])){

    $update_name = $_POST['update_name'];
    $user_email = $_POST['user_email'];
    $user_img = $_FILES['user_img'];

//   print_r($update_name);
// print_r($user_img);

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
                $file_new= "../../resources/up/" . $file_name;

                // $file_new= "../upload_vid/user_img/" . $file_name;

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
                                    echo"<script>alert('scccccc')</script> ";

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
                         // header("Location: " . $_SERVER['PHP_SELF'] . "?success=updated");

                        // var_dump($_SESSION['user_name']);  
                        exit;             
                }


        }else{
                echo"not size ";
                // header("Location: " . $_SERVER['PHP_SELF'] . "?error=invalid_size");

                exit;


        }
        
        
        // var_dump($size);
}else{
        echo "error";
        echo " invalid";

        // redirect('edit.php');
        // header("Location: " . $_SERVER['PHP_SELF'] . "?error=invalid");
        exit;
        }
        }else{
        echo "missing input";
        // redirect('edit.php');
        // header("Location: " . $_SERVER['PHP_SELF'] . "?error=emptyname");

        // redirect('C:\xampp\htdocs\eco_web\resources\tamplate\back_user\admin_view.php?error=emptyname');
        exit;
   
    }

//     print_r($update_name);
//     print_r($user_email);
//     print_r($user_img);


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


