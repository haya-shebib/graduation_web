<?php require_once("../resources/confiq.php");
//  if(!isset($_SESSION['user_name'])) {
//     redirect("../../publicfiles");
//     echo "user";
// }

?>

<?php include(TEMPLATE_FRONT .DS. "header.php") 

?>

<?php 
//  if(!isset($_SESSION['user_name'])) {
//         redirect("../../publicfiles");
//         echo "user";
//     }

?>

   <h3>login</h3>
<div class="container">
<div class="content">
    <h3>hi, <span><?php echo $_SESSION['user_name'] ?></span></h3>
    <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
    <p>this is a user page</p>
    <img src="../../resources/up/<?php echo $_SESSION['user_img']; ?>" alt="" width="100px" height="100px">
    <!-- <img src="../../eco_web/resources/up/user.png" alt="" width="100px" height="100px"> -->
    <a href="login.php" class="btn">login</a>
    <a href="register.php" class="btn">register</a>
    <a href="logout.php" class="btn">logout</a>
    <a href="../publicfiles/admin/edit.php " class="btn">edit</a>
</div>

</div>



</body>
</html>