<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<div class="container my-5">

<div class="container">
<table class="table">
    <?php 
    if(isset($_POST['submit'])){
        // redirect("img3D.php");
        $search=$_POST['search'];
        $sql=query("SELECT * FROM videos WHERE id like '%$search%' or video_title like '%$search%' ");
        confirm($sql);
        if($sql){
            // if it is not empty bigger then 0 
            if(mysqli_num_rows($sql) >0 ){

                
                echo'<thead>
                <tr>
                <th>video</th>
                <th>tittle</th>

                 <th>short_desc</th>
                 <tr>
                 </thead>';
                 while($row=mysqli_fetch_assoc($sql)){

                 echo'<tbody>
                 <tr>
                 <td>  
                 <a href="index.php?edit_p&id={'.$row['id'].'}">
                 <video width="300" height="200" controls>
                    <source src="../resources/uplod/'.$row['video_url'].'" type="video/mp4">
                 </video>
                 </a> 
                </td> 
                 <td>'.$row['video_title'].'</td>
                 <td>'.$row['short_desc'].'</td>
                 </tr>
                 </tbody>';
                 }
            }else{
                echo '<h2 class=text-danger>data not found</h2>';
            }
        }

 }  
 ?>
 <source src="../resources/uplod/video-64e315f16fdbf8.52623529.mp4">
 </table>
    </div>
    </div>