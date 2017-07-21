<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$key   = mysql_real_escape_string($_POST['key']);
switch($key){
    case food:
        $dir="Img/food/";
        break;
    case desserts:
        $dir="Img/desserts/";
        break;
    case drinks:
        $dir="Img/drinks/";
        break;
}
require "upload_in_Img.php";

header("refresh:2; array_manager.php");
  
?>