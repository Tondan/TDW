<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$id = $_POST['key'];
$title =$_POST['titolo'];
$subtitle= $_POST['sottotitolo'];
$text = $_POST['testo'];


echo $id,"<br>\n";
echo $title,"<br>\n";
echo $subtitle,"<br>\n";
echo $text,"<br>\n";



 

		$oid = mysql_query(" UPDATE  `progetto`.`privacy` SET  `titolo` =  '$title', `sottotitolo` =  '$subtitle', `testo` =  '$text'WHERE  `privacy`.`ID` = '$id' ");
	



if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: privacy_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>

