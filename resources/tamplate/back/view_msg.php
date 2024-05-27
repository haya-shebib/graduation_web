<div class="row">
<h1 class="page-header">
  "VIEW USERS MESSAGE"

</h1>
        <h1 style="background-color: aliceblue; color:white;">
    <?php
    //  echo "ffff"; 
    // echo $_SESSION['user_name']; 
    ?>
<h1 class="page-header">
<!-- msg -->
</h1>
<table class="table table-hover">

<thead>
<tr>
     <th>NAME</th>
     <th>MESSAGE </th>
</tr>
</thead>
</table> <!--End of Table-->


    <tbody>
    </div>
<div class="alb">
</div>     
  </tbody>
  <table class="table table-hover">
    <tr>


<?php

$sql =query ("SELECT * FROM posts ORDER BY id DESC");

confirm($sql);

if (mysqli_num_rows($sql) > 0) {

    while ($row = mysqli_fetch_assoc($sql)) { 
        // echo "hiii";
        $id= $row['id'];
        $msg= $row['msg'];            // <td>{$user}</td>

        // echo  $id;
        $video = <<<DELIMITER
        <tbody>

        <tr>
        <span>
            <td>{$row['user_com']} = </td>
            <td> {$msg} <br>
        </span>
        </tbody>

        DELIMITER;
        echo $video;

    }
}else {	echo "<h1>Empty</h1>"; }

$connection->close();
?></tr>
      
    
      </table> <!--End of Table-->
