

<h1 class="page-header">
<?php add_user()?>
<small>page</small>
</h1>

<div class="col-md-6 user_image_box">         
    <span id="user_admin" class='fa fa-user fa-4x'></span>  
</div>


<!-- mult part to put upload of pic of file  -->
<form action="" method="post" enctype="multipart/form-data">


<div class="col-md-6">

<div class="form-group">

        <input type="file" name="file" >
       
    </div>

    <div class="form-group">
           <label for="user_name">user  name hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</label>
      <input  type= "text" name="user_name"  class="form-control">
    </div>


     <div class="form-group">
        <label for="user_email">user email</label>
      <input  type= "text" name="user_email"  class="form-control">
    </div>


    <div class="form-group">
        <label for="password">	password</label>
      <input  type= "text" name="password"  class="form-control">
    </div>

    <div class="form-group">
      <a class="btn btn-danger" id="user_id" href="">	delete</a>
      <input  name= "add_user" type="submit"  class="btn btn-primary pull-right " value="add_user">
    </div>
	
    
    
    </div>

</div>

</form>



            
