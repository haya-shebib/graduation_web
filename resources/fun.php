
<?php
$upload_dir = "upload_vid";
// helper functions 

function last_id()  {
    global $connection;
     // Get the last inserted ID
     return mysqli_insert_id($connection);

}

// display message if login error or wrong
function message_set($msg){
    if(!empty($msg)){
        // session is to store the message in data 
    $_SESSION['message'] = $msg;
    }else {
        $msg = " ";
    }
}


//display message  as if isset of the $msg 
function display_m(){
    // isset is variable check if set is not null != 0
    if(isset($_SESSION['message'])){
        //print the message from message_set
        echo $_SESSION['message'];
        //uunset as when we refease it will delete 
        unset($_SESSION['message']);
    }
}

// if ($connection){
//     echo "is connected";
// }

function redirect($location){
    header("location: $location");
}
// this function help in connectin of data and send it in 
function query($sql){
    global $connection;
    return mysqli_query($connection , $sql);
}
// confirm if not confirm failed 
function confirm($result){
    global $connection;

    if(!$result){
        die(" FAILED QUERY" . mysqli_error($connection));
    }
}// helpfull usefull for datebase to escape string
function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}
function fetch_array($result){

    return mysqli_fetch_array($result);
}
/******************************front end functions *************/

// get videos
function get_videos(){
    // helper function to select the video data
    $query = query("SELECT * FROM videos");
    // to confirm that quiery is good 
    confirm($query);
    // 
    // horodoc means that you will put the img in query
    while($row = fetch_array($query)) {
    $pro_img = display_img($row['video_image']);


    // the ?id will help when i try to touch the img it will show the id

   
    $video =<<<DELIMETER
      <div class="col-sm-4 col-lg-4 col-md-4">
       <div class="thumbnail">

        <a href="item.php?id={$row['id']}">
        <img src="../resources/{$pro_img}" alt="">
        </a>
        <a href="index.php?edit_p&id={$row['id']}">
             <video width="300" height="200" controls>
                <source src="../resources/uplod/{$row['video_url']}" type="video/mp4">
                 </video>
      </a>
        <div class="caption">
            <h4 class="pull-right">{$row['video_title']}</h4>
            <h4><a href="item.php?id={$row['id']}">{$row['video_title']}</a> </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            <a class="btn btn-primary" target="_blank" href="../resources/chart.php?add={$row['id']}">View hologram</a>
        </div>

        <!-- rating  -->
        <div class="ratings">
            <p class="pull-right">15 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>;
                <span class="glyphicon glyphicon-star"></span> 
                </p>
            </div>
        </div>
    </div>
    DELIMETER;
        echo $video;

    }
}
//get including 
function get_including(){
$query = query("SELECT * FROM including");
confirm($query);                
while($row = fetch_array($query)){
    $include_link = <<<DELIMETER
    <a href='show.php'class = 'list-group-item'>{$row['cat_title']}</a>
    DELIMETER;
    echo $include_link;
}
}

// get videos in including page 
function get_videos_incat(){
    
    $query = query("SELECT * FROM videos where video_category_id = " .escape_string($_GET['id'])." ");
    confirm($query);
    // horodoc means that you will put the img in query
    while($row = fetch_array($query))
    // the ?id will help when i try to touch the img it will show the id

    {
    $video =<<<DELIMETER
    <div class="col-md-3 col-sm-6 hero-feature">
    <div class="thumbnail">
        <img src="{$row['video_image']}" alt="">
        <div class="caption">
            <h3>{$row['video_title']}</h3>
            <p>{$row['video_description']}</p>
            <p>
                <a href="#" class="btn btn-primary">watch now</a> <a href="item.php?id={$row['id']}" class="btn btn-default">More Info</a>
            </p>
        </div>
    </div>
</div>
DELIMETER;
    echo $video;

    }
}
// get video in show page 
function get_videos_show_page(){
    $query = query("SELECT * FROM videos");
    confirm($query);
    // horodoc means that you will put the img in query
    while($row = fetch_array($query)) {
    $p=display_img($row['video_image']);
    $video =<<<DELIMETER
    <div class="col-md-3 col-sm-6 hero-feature">
    <div class="thumbnail">
        <img src="../resources/{$p}" alt="">
        <div class="caption">
            <h3>{$row['video_title']}</h3>
            <p>{$row['video_description']}</p>
           <a href="index.php?edit_p&id={$row['id']}">
              <video width="200" height="100" controls>
               <source src="../resources/uplod/{$row['video_url']}" type="video/mp4">
               </video>
            </a>
            <p>
                <a href="../resources/chart.php?add={$row['id']}" class="btn btn-primary">watch now</a> 
                <a href="item.php?id={$row['video_category_id']}" class="btn btn-default">More Info</a>
            </p>
        </div>
    </div>
</div>
DELIMETER;
    echo $video;

    }
}


//login fun
function login(){
    if(isset($_POST['submit'])){

        $name = escape_string($_POST['name'] );
        $email = escape_string($_POST['email']);
        $pass = escape_string($_POST['password']);
        $cpass = escape_string($_POST['cpassword']);
        $user_type = escape_string($_POST['user_type']);
        
        $select = query(" SELECT * FROM user WHERE email = '{$email}' AND password = '{$pass}' ");
    //   $select = query(" SELECT * FROM user WHERE name = '{$name}' AND password = '{$pass}' ");

        confirm($select);
        if(mysqli_num_rows($select) > 0){  
            // $row = fetch_array($select);
            $row = mysqli_fetch_array($select);

        
            if($row['user_type'] == 'user'){

                $_SESSION['user_name'] =$row['name'];
                $_SESSION['user_img'] = isset( $row['user_img']) ? $row['user_img'] : null ;


                 redirect("user_login.php");

                
            }elseif($row['user_type'] == 'admin'){
               $_SESSION['admin_name'] = $row['name'];
            //    $_SESSION['admin_name'] = $name;
               redirect("admin");     
        }else{
            $error[] = 'incorrect email or password!';
            echo "error";
        } 
    }
       
    //      if(mysqli_num_rows($select) == 0){

    //         echo "log";
    //         redirect("login.php"); 
    //     }else {
    //          $_SESSION['email'] = $email;
    //         redirect("../publicfiles/admin");
    //     }
    }
        
}


// function send_m(){
//     // use the isset to make sure not null and use the session to store data enter in contact
//     //PHP makes this data accessible through the $_POST superglobal array.
//     //submit must post display it 
//     if(isset($_POST['submit'])){
//         $nm_from    = $_POST['name'];
//         $email_from = $_POST['email'];

//         $sub_from   = $_POST['subject'];
//         $msg_from   = $_POST['message'];

//         $yy         ="shebib.hy@gmail.com";

//         $head = "from:" .$email_from; 
//         $txt = "you have receved from" .$nm_from. ".\n\n".$msg_from;
//         // mail is used to send through email
//         $re= mail($yy , $sub_from , $txt , $head);
//         // redirect()        
//         if(!$re){
//             echo "error";
//             message_set("error while sending");
//         }else {
//             echo "send";
//             message_set("SEND "); 
//         }
    
// }


// }
// function for sending message 
function send_m(){
    // use the isset to make sure not null and use the session to store data enter in contact
    //PHP makes this data accessible through the $_POST superglobal array.
    //submit must post display it 
    if(isset($_POST['submit'])){
        $nm_from    = $_POST['name'];
        $email_from = $_POST['email'];

        $sub_from   = $_POST['subject'];
        $msg_from   = $_POST['message'];

        $yy         ="anyemail@gmail.com";

        $head = "from: {$nm_from} {$email_from}"; 
        echo $head; 

        // mail is used to send through email
        $re= mail($yy , $sub_from , $msg_from , $head);
        if(!$re){
            echo "error";
            message_set("error while sending");
        }else {
            echo "send";
            message_set("SEND "); 
        }
    
}


}
/******************************back end functions *************/
// display order 
function show_order_admin(){
    $query=query("SELECT * FROM `order`");
    confirm($query);
    while ($row = fetch_array($query)){
        // using btn danger to display bttton delete 
        $order_p = <<<DELIMETER
        <tr> 
            <td> {$row['or_id']}</td>
            <td> {$row['o_amount']}</td>
            <td> {$row['o_transaction']}</td>
            <td> {$row['o_status']}</td>
            
            <td><a class = "btn btn-danger" href="../../resources/tamplate/back/delete_o.php?id={$row['or_id']}"> <span class = "glyphicon glyphicon-remove"></span></td>
        </tr>
        DELIMETER;
        echo $order_p;
    }

}

/******************************admin video*************/

function display_img($pic){
     // global is used to defines the variable outside the function
    global $upload_dir;
    // the cuntinue of the code as "upload_vid /"
   return $upload_dir . DS . $pic;

    

}
// product in admin  

function get_vid_admin(){
    
    $sql =query ("SELECT * FROM videos ORDER BY id DESC");
    // to confirm that quiery is good 
    confirm($sql);

    if (mysqli_num_rows($sql) > 0) {

        while ($row = mysqli_fetch_assoc($sql)) { 
            
            $id= $row['id'];

             $catt = show_including_title_vid($row['video_category_id']);
             $pro_img = display_img($row['video_image']);


         $video = <<<DELIMITER
         <tr>
             <td>{$row['id']}</td>
             <td> {$row['video_title']} <br>
             <a href="index.php?edit_p&id={$row['id']}">
             <img src="../../resources/uplod/{$row['video_image']}" alt="">
             </a>

             </td>
             <td>{$row['price']}</td>
             <td>{$row['count']}</td>
             <td>{$catt}</td>
             <td><a class="btn btn-danger" href="../../resources/tamplate/back/delete_vid.php?id={$row['id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
         </tr>
         DELIMITER;
         
         echo $video;

		 }
        

        }else {
            
            echo "<h1>Empty</h1>";
        }
    }
   






// to show including in data 
function show_including_title_vid($video_category_id){
    $query_catt = query("SELECT * FROM including WHERE 	cat_id  = '{$video_category_id}' ");
    confirm($query_catt);

    while($cat_row = fetch_array($query_catt)){
        return $cat_row['cat_title'];
    }

}


/****************************** ADDING videos admin *************/
// upload new data 
 function add_vid(){
    
 }


//get including (category ) function to take the cat_tittle 
function show_including_add_pro(){
$query = query("SELECT * FROM including");
confirm($query);                
while($row = fetch_array($query)){
    $include_options= <<<DELIMETER
    <option value="{$row['cat_id']}">{$row['cat_title']}</option> 
    DELIMETER;
    echo $include_options;
}
}

/******************************udated *******************************************************/
function update_vid(){
    if (isset($_POST['update'])){
    //    echo 'jgh';
 
       $video_title       = escape_string($_POST['video_title']); 
       $short_desc        = escape_string($_POST['short_desc']);
       $price             = escape_string($_POST['price']);
       $count             = escape_string ($_POST['count']);
       $video_image       = escape_string($_FILES['file']  ['name']);
       $temp_img          = escape_string($_FILES['file']['tmp_name']);

// make sure from id 92
   if(empty($video_image)){
    $get_pic = query("SELECT  video_image FROM  videos  WHERE id = ". escape_string($_GET['id']) . " ");
    confirm($get_pic);

while($pic = fetch_array($get_pic)){
    $img = $pic['video_image'];

}
   }


    // move_uploaded_file($temp_img , UPLOAD_FILE . DS . $video_image);

    //    put information in database 

    $query = "UPDATE videos SET  ";
    $query .= "video_title       = '{$video_title}'      , ";
    $query .= "short_desc        = '{$short_desc}'       , ";
    $query .= "price             = '{$price}'            , ";
    $query .= "count             = '{$count}'            , ";
    $query .= "video_image       = '{$video_image}'      , ";
    // make sure from id 92
      $query .= "WHERE  id = " . escape_string($_GET['id']);

    $send_query = query($query);
    confirm($send_query);
    message_set("update  ");
    redirect("index.php?product_p");

    }

}

/*****************************category *******************************/
function show_cat_adminn(){
    // MAKE SURE 94
    $query ="SELECT * FROM including"; 
    $catt_query = query($query);
    confirm($query);

  while($row = fetch_array($catt_query)){
   $cat_title = $row['cat_title'];
   $cat_id = $row['cat_id'];

$catt = <<<DELIMETER
    <tr>
        <td>{$cat_id}</td>
        <td>{$cat_title}</td>
        <td><a class = "btn btn-danger" href="../../resources/tamplate/back/delete_cat.php?id={$row['cat_id']}"> <span class = "glyphicon glyphicon-remove"></span>
    </td>
    </tr>

DELIMETER;
echo $catt;
}
  }


function add_cat_admin(){
    if(isset($_POST['add_cat_admin'])){
        // $cat_id= escape_string($_POST['cat_id']);
        $cat_title= escape_string($_POST['cat_title']);
        if(empty($cat_title) || $cat_title== " "){
            echo "cannot be empty  ";
            // redirect("index.php?categories");

        }else{
        $insert_cat = query("INSERT INTO  including(cat_title) VALUES('{$cat_title}') ");
        confirm($insert_cat);
        message_set("yess");
        redirect("index.php?categories");
        
    }
    }
}
/*****************************users admin  *******************************/

function show_users_admin(){
    $query=query("SELECT * FROM `user`");
    confirm($query);
    while ($row = fetch_array($query)){
       
        // using btn danger to display bttton delete 
        $user = <<<DELIMETER
        <tr> 
            <td> {$row['user_id']}</td>
            <td> {$row['name']}</td>
            <td> {$row['email']}</td>
            <td> {$row['password']}</td>
            <td><a class = "btn btn-danger" href="../../resources/tamplate/back/delete_user.php?id={$row['user_id']}"> <span class = "glyphicon glyphicon-remove"></span>

                    
            </tr>
        DELIMETER;
        echo $user;
    }

}

function add_user(){
    if(isset($_POST['add_user'])){
        
        // $user_id= escape_string($_POST['user_id']);
        $user_name= escape_string($_POST['user_name']);
        $user_email= escape_string($_POST['user_email']);
        $password= escape_string($_POST['password']);
        // $video_image       = escape_string($_FILES['file']  ['name']);
        // $temp_img          = escape_string($_FILES['file']['tmp_name']);

        //  move_uploaded_file($temp_img , UPLOAD_FILE . DS . $video_image);

         $insert_quer = query("INSERT INTO  user(user_name,user_email,password ) VALUES('{$user_name}','{$user_email}','{$password}' ) ");
        confirm($insert_quer);
        message_set("yess");
        redirect("index.php?users");


        
    }
    }

    /****************************  report *******************************/



function report(){
    
    $query = query("SELECT * FROM result_a");
    // to confirm that quiery is good 
    confirm($query);
    // horodoc means that you will put the img in query
    while($row = fetch_array($query)){
  
 
    $repo =<<<DELIMETER
    <tr>
           <td>{$row['res_id']}</td>
            <td>{$row['vid_id']}</td>
            <td>{$row['ord_id']}</td>
            <td>{$row['vid_price']}</td>      
            <td>{$row['video_title']}</td>       
            <td>{$row['vid_quantity']}</td>   
            <td><a class = "btn btn-danger" href="../../resources/tamplate/back/delete_r.php?id={$row['res_id']}"> <span class = "glyphicon glyphicon-remove"></span></td>
    

        </tr>
    DELIMETER;
        echo $repo;
    }
} ?>

<?php
function dis(){
$user=  $_SESSION['user_name'];

 $sql =query("SELECT * FROM user WHERE name ='$user' ");
 confirm($sql);
 if($sql){
        if(mysqli_num_rows($sql)>0){
                while($row= mysqli_fetch_array($sql)){

                     

                        ?>
                                <div class="form-group">
                                        <input type="text" name="update_name" class="form-control" value="<?php echo $row['name'] ?>"> 
                                </div>
                                <div class="form-group">
                                        <input type="email" name="user_email" class="form-control" value="<?php echo $row['email']; ?>"> 
                                </div>
                                <div class="form-group">
                                        <input type="file" name="user_img" class="form-control" > 
                                </div>
                
                                <!-- submit -->
                                <div class="form-group">
                                        <input type="submit" name="update" class="btn btn-info" value="update"> 
                                </div>
                        <?php
                }
        }

 }
}
// 

function chat(){
    
    $sql = query("SELECT * FROM post");
    confirm($sql);
    if(mysqli_num_rows($sql) > 0) {
     while($row = mysqli_fetch_assoc($sql)) {
        //  echo "" . $row["name"] . " " . $row["msg"] . " --" . $row["date"] . "<br> ";
         echo"" . $row["name"] . " " ."  :: ". $row["msg"]." --" .$row["date"] ."<br>";

         echo "<br>";
    }    
 }else {
     echo "no msg";
 }
//  $connection->close();

}


//     if(mysqli_num_rows($sql) > 0) {
//      while($row = mysqli_fetch_assoc($sql)) {
//         //  echo "" . $row["name"] . " " . $row["msg"] . " --" . $row["date"] . "<br> ";
//          echo"" . $row["name"] . " " ."  :: ". $row["msg"]." --" .$row["date"] ."<br>";

//          echo "<br>";
//     }    
//  }else {
//      echo "no msg";
//  }
// //  $connection->close();

// }

?>