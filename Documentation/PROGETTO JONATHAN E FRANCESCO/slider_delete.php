<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";



$id = $_GET['slider'];  
echo($id);


$oid = mysql_query(" DELETE FROM `slider` WHERE `ID` = '$id' ");



if($oid){
    echo("<br>delete avvenuto correttamente");
    header("location: slider_manager.php");
} else{
    echo("<br>delete non eseguito");
  }
 
?>


