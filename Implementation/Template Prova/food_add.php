<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";
$dir="Img/food/";
require "upload_in_Img.php";

header("refresh:2; array_manager.php");
  
?>