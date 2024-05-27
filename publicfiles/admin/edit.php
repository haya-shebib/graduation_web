
<?php require_once("../../resources/confiq.php"); ?>

<?php include(TEMPLATE_USER ."/header_user.php"); ?>


<!-- in the admin if not set username redirect back to the publicfiles -->
<?php
if(isset($_SESSION['name'])){
    echo '
    <a href="../publicfiles/login.php" class="nav-link text-while">signup </a>
    ';
}else{
    echo '<h4 > no </h4>';
}
?>


<div id="page-wrapper">

    <div class="container-fluid">      
            <?php

            if($_SERVER['REQUEST_URI'] == "/eco_web/publicfiles/admin/"
            || $_SERVER['REQUEST_URI'] == "/eco_web/publicfiles/admin/edit.php")
            {
                include(TEMPLATE_USER ."/admin_view.php");
            }
            if(isset($_GET['user_login']))
            {
             include(TEMPLATE_USER . "/user_login.php");
         }
        
        if(isset($_GET['add_vid']))
           {
            include(TEMPLATE_USER . "/add_vid.php");
        }
        if(isset($_GET['chat_admin']))
         {
            include(TEMPLATE_USER . "/chat_admin.php");
        }
       if(isset($_GET['user_videos']))
     {
      include(TEMPLATE_USER . "/user_videos.php");
  }

            ?>
            

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    
            <!-- //footer -->
            <?php include(TEMPLATE_USER .  "/footer_user.php");?>