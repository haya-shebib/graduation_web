<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<?php 
$comment =$_POST['comment'];
$id =$_POST['id'];

if(empty($comment)){
echo"empty";
}else{
    $user=$_SESSION['user_name'];
    $query = query("INSERT INTO comment(post_id,comment,user_com,data_comm) VALUES('$id', '$comment','$user',now())");
    confirm($query);
    if($query){
        $con=query("UPDATE videos SET comment =comment+1 WHERE id='$id' ");
        confirm($con);
    }
}

echo" not empty comment ";

?>



