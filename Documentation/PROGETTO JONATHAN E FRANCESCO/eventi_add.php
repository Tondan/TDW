<?php
session_start();
require "include/template2.inc.php";
require "include/dbms.inc.php";
require "include/auth.inc.php";

$title =$_POST['titolo'];
$subtitle= $_POST['sottotitolo'];
$text = $_POST['testo'];
$date= $_POST['data'];
$name_writer = $_POST['nome_scrittore'];
$name_category = 'evento';

echo $date,"<br>\n";
echo $name_writer,"<br>\n";
echo $name_category,"<br>\n";
echo $title,"<br>\n";
echo $subtitle,"<br>\n";
echo $text,"<br>\n";




$oid = mysql_query(" INSERT INTO `progetto`.`notizie` (
					`ID`, 
					`ID_categoria`, 
					`data`, 
					`nome_scrittore`, 
					`nome_categoria`, 
					`titolo`, 
					`sottotitolo`, 
					`testo`) 
					VALUES (
					NULL, 
					'2', 
					'$date', 
					'$name_writer', 
					'$name_category', 
					'$title', 
					'$subtitle', 
					'$text'); ");


if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: eventi_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


