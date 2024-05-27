<?php 
$msg = $_POST['msg'];
$name = $_POST['name'];
$sql = query("INSERT INTO  post(msg,name)VALUES('$msg', '$name')");
confirm($sql);
// header("location:chat_admin.php");
redirect("edit.php?chat_admin");




?>