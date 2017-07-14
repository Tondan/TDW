<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$id = $_GET['key'];    
echo($id);


$oid = mysql_query(" DELETE FROM `informazioni` WHERE `ID` = '$id' ");



if($oid){
    echo("<br>delete avvenuto correttamente");
    header("location: informazioni_manager.php");
} else{
    echo("<br>delete non eseguito");
  }
  
?>


