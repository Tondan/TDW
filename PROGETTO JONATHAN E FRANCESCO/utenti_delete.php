<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$username = $_GET['username'];    



$oid = mysql_query(" DELETE FROM `users` WHERE `username` = '$username' ");



if($oid){
	$del = mysql_query(" DELETE FROM `users_groups` WHERE `username` = '$username' ");
	if($del){
	    echo("<br>delete avvenuto correttamente");
        header("location: utenti_manager.php");	
	}
    
} else{
    echo("<br>delete non eseguito");
  }
    
?>


