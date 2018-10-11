<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$id = $_GET['team'];  
echo($id);


$oid = mysql_query(" DELETE FROM `team` WHERE `ID` = '$id' ");



if($oid){
    echo("<br>delete avvenuto correttamente");
    header("location: team_manager.php");
} else{
    echo("<br>delete non eseguito");
  }
 
?>


