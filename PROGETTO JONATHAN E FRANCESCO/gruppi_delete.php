<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$id = $_GET['key'];    



$oid = mysql_query(" DELETE FROM `groups` WHERE `ID` = '$id' ");



if($oid){
    echo("<br>delete avvenuto correttamente");
    header("location: gruppi_manager.php");
} else{
    echo("<br>delete non eseguito");
  }
    
?>


