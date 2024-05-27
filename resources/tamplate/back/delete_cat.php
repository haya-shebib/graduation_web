<?php  require_once("../../confiq.php");

if (isset($_GET['id'])){
    $query=query("DELETE FROM `including` WHERE cat_id = ". escape_string($_GET['id']) ." ");
    confirm($query);
   
    message_set("delelte done");
    redirect("../../../publicfiles/admin/index.php?categories");
}
else{
    redirect("../../../publicfiles/admin/index.php?categories");
echo "this is not kjjj ";
}
?>