<?php
session_start();
require "include/dbms.inc.php";
require "include/auth.inc.php";

$id = $_POST['key'];
$date= $_POST['data'];
$name_writer = $_POST['nome_scrittore'];
$name_category = 'evento';
$title =$_POST['titolo'];
$subtitle= $_POST['sottotitolo'];
$text = $_POST['testo'];


echo $id,"<br>\n";
echo $date,"<br>\n";
echo $name_writer,"<br>\n";
echo $name_category,"<br>\n";
echo $title,"<br>\n";
echo $subtitle,"<br>\n";
echo $text,"<br>\n";
 
 
$oid = mysql_query(" UPDATE  `progetto`.`notizie` 
					 SET  
					 `data` =  '$date',
					 `nome_scrittore` =  '$name_writer', 
					 `titolo` =  '$title', 
					 `sottotitolo` =  '$subtitle', 
					 `testo` =  '$text' 
					 WHERE  
					 `notizie`.`ID` = '$id' ");




if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: eventi_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


