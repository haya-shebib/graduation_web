
<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<?php 
   $id= $_POST['id'];
    $querys =query ("SELECT * FROM likes WHERE post_id='$id' ORDER BY id ASC");
    confirm($querys);

    $output ="";

    if(mysqli_num_rows($querys)< 1){
        $output = "<h2 class='text-center'>'no like still'</h2>";

    }else {
        while ($row = mysqli_fetch_array($querys)) {
            $output .="
            <div>

            <h4>liked  by ' " . $row['user_id'] . "  ' " ."     date:" . $row['status'] . " </h4>
            </div>

             ";
    
        }
    
    
    }echo $output;
    // exit;



?>