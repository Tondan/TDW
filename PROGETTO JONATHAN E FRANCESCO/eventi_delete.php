<?php
session_start();
require "include/template2.inc.php";
require "include/dbms.inc.php";
require "include/auth.inc.php";

$id = $_GET['key'];    
echo($id);


$oid = mysql_query(" DELETE FROM `notizie` WHERE `ID` = '$id' ");



if($oid){
    echo("<br>delete avvenuto correttamente");
    header("location: eventi_manager.php");
} else{
    echo("<br>delete non eseguito");
  }
  
?>


