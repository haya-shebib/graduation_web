



<div class="col-lg-12">
    

    <h1 class="page-header">
        Users
        
    </h1>
        <p class="bg-success">
        <?php 
        // echo $message;
         ?>
    </p>

    <a href="index.php?add_user" class="btn btn-primary">Add User</a>


    <div class="col-md-12">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>Username</th>
                    <th>password</th>
                    <th>image </th>
                </tr>
            </thead>
            <tbody>

            <?php
            //  foreach($users as $user):
                 ?>

                <tr>
                    <?php  show_users_admin();?>
                </tr>
     

            </tbody>
        </table> <!--End of Table-->
    

    </div>

</div>