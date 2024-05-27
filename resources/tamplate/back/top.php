<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!-- to go back to home  -->
    <a class="navbar-brand" href="../index.php">-- back home--</a>

</div>
   <!-- Top Menu Items -->
   <ul class="nav navbar-right top-nav">
              <li class="dropdown">
                <!-- this code help in displaying the username  -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> 
              <li>

              <?php 
              echo $_SESSION['admin_name'];
              
               ?>
               <br>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                        <b class="caret"></b>
                </a>
                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a> -->
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>  
            </ul>
<!-- 
<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <style>
    .fa fa-quora {
        font-size: 36px;
    }
</style>
            </div>
           
            <a href="#" class="logo">           

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li class="">
                    <a href="index.php?orders"><i class="fa fa-fw fa-dashboard"></i> orders </a>
                </li>
                <li class="">
                    <a href="index.php?report_r"><i class="fa fa-fw fa-dashboard"></i> report </a>
                </li>
                <li>
                    <a href="index.php?product_p"><i class="fa fa-fw fa-bar-chart-o"></i> View Products</a>
                </li>
                <li>
                    <a href="index.php?add_p"><i class="fa fa-fw fa-table"></i>  DISPLAY HOLOGRAM VIDEOS</a>
                </li>
                
                <li>
                    <a href="index.php?categories"><i class="fa fa-fw fa-desktop"></i> Categories</a>
                </li>
                <li>
                    <a href="index.php?users"><i class="fa fa-fw fa-user"></i>
            Users</a>
                </li>
                <li >
                    <a href="index.php?view_msg"><i class="fa fa-fw fa-envelope"></i>
            view msg </a>
                </li>
            
                <li >
                    <a href="index.php?add_p2"><i class="fa fa-fw fa-tags"></i>
            DISPLAY NEW PRODUCT </a>
                </li>
                    
               
                </ul>
               

            </nav>
            </div>

 </form>
</div>

        </div>


           
 <script src="../../../publicfiles/js/script.js"></script>


   -->