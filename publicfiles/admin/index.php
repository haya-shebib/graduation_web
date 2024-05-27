<?php require_once("../../resources/confiq.php"); ?>
<?php include(TEMPLATE_BACK ."/header.php"); ?>
<!-- in the admin if not set username redirect back to the publicfiles -->
<?php  
if(!isset($_SESSION['admin_name'])) {
        echo "user";

    redirect("login.php");

}


?>

<div id="page-wrapper">

    <div class="container-fluid">
            <?php

            if($_SERVER['REQUEST_URI'] == "/eco_web/publicfiles/admin/"
            || $_SERVER['REQUEST_URI'] == "/eco_web/publicfiles/admin/index.php")
            {
                // include(TEMPLATE_BACK ."/admin_view.php");
            }
        
         if(isset($_GET['orders']))
           {
            include(TEMPLATE_BACK . "/orders.php");
        }
        if(isset($_GET['add_p']))
           {
            include(TEMPLATE_BACK . "/add_p.php");
        }
        if(isset($_GET['categories']))
           {
            include(TEMPLATE_BACK . "/categories.php");
        }
        if(isset($_GET['product_p']))
           {
            include(TEMPLATE_BACK . "/product_p.php");
        }
        if(isset($_GET['edit_p']))
           {
            include(TEMPLATE_BACK . "/edit_p.php");
        }
        if(isset($_GET['users']))
           {
            include(TEMPLATE_BACK . "/users.php");
        }
        if(isset($_GET['add_user']))
         {
         include(TEMPLATE_BACK . "/add_user.php");
       }
        if(isset($_GET['edit_user']))
        {
        include(TEMPLATE_BACK . "/edit_user.php");
        }
        if(isset($_GET['report_r']))
        {
        include(TEMPLATE_BACK . "/report_r.php");
        }
        if(isset($_GET['view_msg']))
        {
         include(TEMPLATE_BACK . "/view_msg.php");
     }
     
      if(isset($_GET['add_p2']))
           {
            include(TEMPLATE_BACK . "/add_p2.php");
        }
            ?>
            

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    
            <!-- //footer -->
            <?php include(TEMPLATE_FRONT .  "/footer.php");?>