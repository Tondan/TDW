<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];
$id = $_POST['key'];
$quantity= $_POST['quantita'];
$quality = $_POST['qualita'];

echo $id,"<br>\n";
echo $quantity,"<br>\n";
echo $quality,"<br>\n";

if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/numeri/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso); 
	$oid = mysql_query(" 
		INSERT INTO `progetto`.`numerivincenti` (
		`ID`, 
		`quantita`, 
		`qualita`, 
		`image_filename`) 
		VALUES (
		NULL, 
		'$quantity', 
		'$quality', 
		'$percorso');

 ");}
else{
	$oid = mysql_query(" 
		INSERT INTO `progetto`.`numerivincenti` (
		`ID`, 
		`quantita`, 
		`qualita`) 
		VALUES (
		NULL, 
		'$quantity', 
		'$quality');

 ");
}


if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: numeri_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>