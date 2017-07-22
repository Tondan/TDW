<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/LGallery/";
$change_name=1;
$key   = mysql_real_escape_string($_POST['key']);

require "upload_in_Img.php";

header("refresh:2; lgallery_manager.php");
  
?>