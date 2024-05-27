<?php require_once("../resources/confiq.php")?>
<?php echo"yess" ;?>

<?php 

if(isset($_POST['update'])){
    echo"kooo";

    $update_name = $_POST['update_name'];
    $user_email = $_POST['user_email'];
    $user_img = $_FILES['user_img'];

    if(!empty($update_name) && !empty($user_email) ){

    }else{
        redirect('../resources/tamplate/back_user/admin_view.php?error=emptyname');
        exit;
   
    }

    print_r($update_name);
    print_r($user_email);


}

?>