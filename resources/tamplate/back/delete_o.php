<?php  require_once("../../confiq.php");

if (isset($_GET['id'])){
    $query=query("DELETE FROM `order` WHERE or_id = ". escape_string($_GET['id']) ." ");
    confirm($query);
   
    message_set("delelte done");
    redirect("../../../publicfiles/admin/index.php?order");
}
else{
    redirect("../../../publicfiles/admin/index.php?order");
echo "this is not kjjj ";
}
?>