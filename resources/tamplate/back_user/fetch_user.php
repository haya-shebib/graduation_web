<?php 
   $id= $_POST['id'];

  $querys =query ("SELECT * FROM user WHERE user_id !='$id' ");
  confirm($querys);
  $sat = mysqli_prepare($connection, $querys);
  if(mysqli_num_rows($querys)>0){

    // $conversation = $sat->fetchAll();

    }else { 


    }

?>