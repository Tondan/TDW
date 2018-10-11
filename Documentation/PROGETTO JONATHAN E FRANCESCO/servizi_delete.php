<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$script = $_GET['key'];    


$oid = mysql_query(" DELETE FROM `services` WHERE `script` = '$script' ");


if($oid){
	$del = mysql_query(" DELETE FROM `groups_services` WHERE `script` = '$script' ");
	if($del){
        echo("<br>delete avvenuto correttamente");
        header("location: servizi_manager.php");
	}
} else{
    echo("<br>delete non eseguito");
  }
    
?>


