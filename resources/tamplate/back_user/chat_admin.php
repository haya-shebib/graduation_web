

    <div id="main">
        <h1 style="background-color: aliceblue; color:white;">
    <?php
    echo $_SESSION['user_name']; 
    ?>
    online
    </h1>
    <div class="output">  
        <?php 
        // chat();
           ?>

    </div>
        
          
<!-- <form method="post" action="send.php">
        <textarea name="msg"  class= "form-control">  </textarea><br>

            <input type="submit" value="send">
 
    </form><br>


 
</div> -->
   <?php
 
    if (isset($_POST['submit']))
{
    // $id =$_POST['id'];
    $user=$_SESSION['user_name'];
 
    $msg       = ($_POST['msg']); 
    $sql = query("INSERT INTO posts (user_com ,msg)  VALUES('{$user}','{$msg}')");
    confirm($sql);
}  
   ?>

<form action="" method="post"  enctype="multipart/form-data">
<div class="form-group">
           <label for="product-title">message </label>
      <textarea placeholder="write your msg for admin " name="msg" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
<input type="submit"  name="submit" value="Upload">
</form>

