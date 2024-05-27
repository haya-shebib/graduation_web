<?php require_once("confiq.php");?>
<!-- chart for add  condition to add new product -->
<?php 
//    if(isset($_GET['add'])){
//     echo "hii";
//     $_SESSION['pro_'.$_GET['add']] +=1;
//     redirect("index.php");

//    }
//     // use session to save and use get to get the input and increse evertime by 1

//     $_SESSION['pro_'.$_GET['add']] +=1;
//     // redirect to count 
//     redirect("index.php");
//     } 
    // <!-- to not pay more then the available   -->
?>
   <?php 
if(isset($_GET['add'])){
        
    $quu=  query("SELECT * FROM videos where id=". escape_string($_GET['add'] ). " ");
    confirm($quu);
    echo "hi haya";
    // take information from table 
    while($row = fetch_array($quu)){
        echo "hello";

        $quantity = $row['count'] ;
    //     // if row in table phpadmin not equal to the pices i have  
    //     // $row['count']= the number of count we have 
        if($quantity != $_SESSION['video_' . $_GET['add']]) {
            echo "available ";
           $_SESSION['video_' . $_GET['add']] +=1;
    //       echo "Video added to cart. Category ID: " . $_GET['add'];
        redirect("../publicfiles/checkout.php");
        }else {
            echo "no more";
    //         message_set("no more available" );
        // message that no more available for cart and redirect
            redirect("../publicfiles/checkout.php");
       
      }
    }
   }
   
   

//    to remove some of the content if less then 1 redirect 
   if(isset($_GET['remove'])){
    // minus the video
    $_SESSION['video_' . $_GET['remove']] -- ; 
    if ($_SESSION['video_' . $_GET['remove']] < 1){
        unset($_SESSION['items']);
        unset($_SESSION['max']);
        redirect("../publicfiles/checkout.php"); 
    }else{
    // display_m("helloo");
    redirect("../publicfiles/checkout.php");
}
   }


// to delete the get session 
   if(isset($_GET['delete'])){
        $_SESSION['video_' . $_GET['delete']] = '0';
        //to delete the item to zero when it is empty 
        unset($_SESSION['items']);
        unset($_SESSION['max']);
        redirect("../publicfiles/checkout.php");
    }else{
    display_m("not hollo");
}

    ?>
   
<?php 
    function c() {
        $max =0;
        $items =0;
        $i_name= 1;
        $i_number=1;
        $i_amount=1;
        $i_quantity=1;
        


    // to add more videos to the session in the website chart 
    // for each as name is the key video_ and value is the id 1
        foreach($_SESSION as $name => $value){
            // the value inside cart as more then zero added
         if($value > 0){
        // substr that as it print from first alp till 6 so it will print video_
            if (substr($name , 0 ,6) == "video_"){
            $length = strlen($name )- 6 ;
            // $l=  $length - 6;
            $id = substr($name , 6 ,$length );
            // $query = query("SELECT * FROM videos ");
            $query = query("SELECT * FROM videos WHERE id = " . escape_string($id). " " );
            // to confirm that quiery is good 
            confirm($query);
                while($row = fetch_array($query)){
                    // to take out the total of multiply the price by the value which is the quantity
                $pro_img = display_img($row['video_image']);

                $sub = $row['price'] * $value ;
                $items += $value ; 

            // the ?id will help when i try to touch the img it will show the id
            // this is for plus minus and remove button 
                
                $video =<<<DELIMETER
                <tr  style="background-color: black;   font-size: 18px;">
                
                    <td>{$row['video_title']} <br>
                    </td>
                    <td>{$row['price']}</td>
                    <td>{$value}</td>
                    <td>{$sub}</td>
                    <td>
                    
                    <a class= 'btn btn-primary' href="../resources/chart.php?remove={$row['id']}">
                    <span class= 'glyphicon glyphicon-minus'></span></a>
                    <a class= 'btn btn-primary '  href="../resources/chart.php?add={$row['id']}">
                    <span class= 'glyphicon glyphicon-plus'></span></a>
                    <a  href="../resources/chart.php?delete={$row['id']}">
                    <span class= 'glyphicon glyphicon-remove'></span></a> 
                    </td>      
            </tr>


            <input type="hidden" name="item_name_{$i_name}" value="{$row['video_title']}">
            <input type="hidden" name="item_number_{$i_number}" value="{$row['video_category_id']}"> 
            <input type="hidden" name="amount_{$i_amount}" value="{$row['price']}"> 
            <input type="hidden" name="quantity_{$i_quantity}" value="{$value}"> 

            
            DELIMETER;
            echo $video;
            // this increament will help while open the inpect it will show if more then item with different name
            $i_name++;
            $i_number++;
            $i_amount++;
            $i_quantity++;
            
                    } // to take the max of the whole items as it will add maxx + 80 + 44
             $_SESSION['max']=  $max +=$sub; 
        // to added the value of the items   
          $_SESSION['items' ] = $items ;   

                    }
                }
                }
        
        
        
        }
    //to not display the buttom unlease the quantity isset
function display_pay(){
    if(isset($_SESSION['items']) && $_SESSION['items'] >=1){
$button = <<<DELIMETER
    <input type="image" name="upload" 
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" 
alt="PayPal - The safer, easier way to pay online">
DELIMETER;
return $button;
}
}



// display on thankyou page 
function result1() {
    global $connection;
    // when we write up the website ?hs it will show the thankyou  
  if(isset($_GET['hs'])){
    $total= $_GET['hl'];
    $coin= $_GET['hc'];
    $purchase= $_GET['hp'];
 
    //  73 for putting new data in side my admin 
    
    $max =0;
    $items =0;
   
// to add more videos to the session in the website chart 
// for each as name is the key video_ and value is the id 1
foreach($_SESSION as $name => $value){
    // the value inside cart as more then zero added
     if($value > 0){
// substr that as it print from first alp till 6 so it will print video_
if (substr($name , 0 ,6) == "video_"){
$length = strlen($name) - 6;
$id = substr($name , 6 , $length);
$qry_o = query("INSERT INTO `order` (`o_amount`, `o_transaction`, `o_status`)VALUES('{$total}', '{$coin}', '{$purchase}')");
    $last_id = mysqli_insert_id($connection);
    echo $last_id;
    confirm($qry_o);
   
// $query = query("SELECT * FROM videos ");
$query = query("SELECT * FROM videos WHERE id = " . escape_string($id). " " );
// to confirm that quiery is good 
confirm($query);
//  take from the query video 
while($row = fetch_array($query)){
// and to  multiply the  video price by the quantity  value which is the quantity
        
        $price_r= $row['price'] ;
        $title_r= $row['video_title'] ;
        $sub =$row['price']* $value ;
        $items += $value ; 

    //   price_r is the price of item alone without the quantity , the value is the quantity  of items 
    $qry_r = query("INSERT INTO result_a (  vid_id, ord_id , vid_price , video_title, vid_quantity) VALUES('{$id}', '{$last_id}', '{$price_r}' ,'{$title_r}', '{$value}')");
    confirm($qry_r);
  
} // to take the max of the whole items as it will add maxx + 80 + 44
    $max +=$sub; 
   // to added the value of the items   
    echo $items ;   

        }
          }
 }
       session_destroy();
 }else {
        redirect("index.php");
    }
}

?>

   