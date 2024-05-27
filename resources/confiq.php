<?php 
ob_start();
session_start();
// comment it untell use it
// session_destroy();


defined("DS") ? null : define("DS",DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__ . DS ."tamplate/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "tamplate/back");

defined("TEMPLATE_USER") ? null : define("TEMPLATE_USER", __DIR__ . DS . "tamplate/back_user");


// defined("UPLOAD_FILE") ? null : define("UPLOAD_FILE", __DIR__ . DS . "tamplate/uplod");

defined("DB_HOST") ? null : define("DB_HOST", "localhost" );
defined("DB_USER") ? null : define("DB_USER" ,"root");
defined("DB_PASS") ? null : define("DB_PASS" ,"");
defined("DB_NAME") ? null : define("DB_NAME" ,"eco_db");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
require_once("fun.php");
require_once("chart.php");

if(!$connection){
    echo "failed";
    exit();
}
?>