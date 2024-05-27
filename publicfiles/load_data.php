<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<section>

<?php 

 $sql =query ("SELECT * FROM vid  ORDER BY id DESC");
 // to confirm that quiery is good 
 
 confirm($sql);

 $output = '';

 if (mysqli_num_rows($sql) > 0) {

 $output .= " <h2 class='text-center'>  </h2> ";

     while ($row = mysqli_fetch_assoc($sql)) { 
         
        //  $id= $row['id'];
         // <td>{$_SESSION['user_name'] }</td>
        //  $user_id=$row['user_id'];

         $output .= "

        

         <table class='table table-hover'>

         <div class='col-md-10 shadow my-4'>

         <h4>   <i class='fa fa-user' aria-hidden='true'></i>
         ': "   .$row['user_com'] ."</h4>
             <h4> "     .$row['short_desc']." </h4>
           <div class='col-md-12'>
          <div class='row'>
            <div class='col-md-6 my-2'> 
            </table>   "?>
            <?php 
                // $user=$_SESSION['user_name'];

                $qqq=query("SELECT  * FROM likes WHERE  user_id='".$_SESSION['user_name']."' AND post_id='".$row['id']."' " ); 
                confirm($qqq);
              
                if(mysqli_num_rows($qqq)==1){
        
                $output.="
                <button  name='unlike' class='btn  unlike bg-info text-white' id='".$row['id']."' >".$row['likes']."<i class='fas fa-thumbs-up'></i></button> ";
                }else{
                $output.="
                <button name='like' class='btn  like ' id='".$row['id']."' >".$row['likes']."<i class='fas fa-thumbs-up'></i></button>";          

                }
                ?>

            <?php $output.="

             </div>
                <div class='col-md-6 my-2'>
                      <button   class='btn col-md-12 view'  id='".$row['id']."' >".$row['comment']."<i class='fas fa-comment'></i></button>
                  </div>
                  </div>
     </div>

 <div class='col-md-12'>
    <form  method='POST'>
      <div class='row'>
           <div class='col-md-8'>
                <input type='text' name='comment' class='form-control my-2' autocomplete='off' id='comment'>
           </div>
            <div class='col-md-4'>
              <input type='submit' name='addcomment' value='comment' class='btn btn-info my-2 send' id='".$row['id']."' >
            </div>
      </div>
      



  </form>

  

<div id='view_comment' style='height:100px; overflow-x:hidden; overflow-y:scroll; display:none;'>
<div class='comment_data'>

</div>
</div>
<hr> 

</div>
</div>

           ";  
          }
          
  // else {
  //     	echo "<h1>Empty</h1>";
      // }

   	} 	echo $output;
    ?>




</section>
