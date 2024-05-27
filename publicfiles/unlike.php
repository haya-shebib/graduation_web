<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <?php 

  $id = $_POST["id"];
  $user=$_SESSION['user_name'];

$query = query("DELETE FROM likes WHERE user_id='$user'  AND post_id='$id' ");
confirm($query);
if($query){
    echo"empty comment ";

    $con=query("UPDATE vid SET likes =likes-1 WHERE id='$id' ");
    confirm($con);


}

?>