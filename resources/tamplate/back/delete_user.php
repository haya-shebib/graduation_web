<?php  require_once("../../confiq.php");

if (isset($_GET['id'])){
    $query=query("DELETE FROM `user` WHERE user_id= ". escape_string($_GET['id']) ." ");
    confirm($query);
   
    message_set("delelte user");
    redirect("../../../publicfiles/admin/index.php?users");
}
else{
    redirect("../../../publicfiles/admin/index.php?users");
echo "this is not kjjj ";
}
?>