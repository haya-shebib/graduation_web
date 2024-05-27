<?php  require_once("../../confiq.php");

if (isset($_GET['id'])){
    $query=query("DELETE FROM `result_a` WHERE res_id= ". escape_string($_GET['id']) ." ");
    confirm($query);
   
    message_set("delelte user");
    redirect("../../../publicfiles/admin/index.php?report_r");
}
else{
    redirect("../../../publicfiles/admin/index.php?report_r");
echo "this is not kjjj ";
}
?>