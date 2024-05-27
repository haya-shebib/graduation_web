<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">user profile </a>
    <!-- to go back to home  -->
    <a class="navbar-brand" href="../index.php">home </a>

</div>
   <!-- Top Menu Items -->
   <ul class="nav navbar-right top-nav">
              <li class="dropdown">
                <!-- this code help in displaying the username  -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> <?php 
            //   $_SESSION['name'];
               ?><b class="caret"></b>
                </a>
                    <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a> -->
                    <ul class="dropdown-menu">
                    <li><a href="logout.php"> <i class=""></i><?php 
                         echo $_SESSION['user_name'];  ?>
                         </a> 
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>  