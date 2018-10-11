<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];

$id = $_POST['key'];
$title =$_POST['titolo'];

echo $id,"<br>\n";
echo $title,"<br>\n";

$percorso="skins/images/intestazione/".$nome_file;


$oid = mysql_query(" 
					INSERT INTO `progetto`.`page` (
							`ID`,
							`titolo`, 
							`image_filename`) 
					VALUES (
							NULL, 
							'$title', 
							'$percorso'); 
 ");
//$ultimo_id=mysql_insert_id();


if($oid){
	
	move_uploaded_file($nome_file_temporaneo,$percorso);
    	header("location: intestazione_manager.php");
 } 
 else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
}

  
?>

