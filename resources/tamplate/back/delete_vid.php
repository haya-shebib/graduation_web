<?php  require_once("../../confiq.php");

if (isset($_GET['id'])){
    $query=query("DELETE FROM `videos` WHERE id = ". escape_string($_GET['id']) ." ");
    confirm($query);
   
message_set("deleted");
redirect("../../../publicfiles/admin/index.php?product_p");
}
else{
    redirect("../../../publicfiles/admin/index.php?product_p");
echo "this cannot  deleted  ";
}
?>