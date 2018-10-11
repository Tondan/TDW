<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];
$id = $_POST['key'];
$name= $_POST['nome'];
$description = $_POST['descrizione'];
$position =$_POST['position'];

echo $id,"<br>\n";
echo $name,"<br>\n";
echo $description,"<br>\n";

$percorso="skins/images/materieprime/".$nome_file;


$oid = mysql_query(" 
		INSERT INTO  `progetto`.`materieprime` (`ID` ,`nome` ,`descrizione` ,`image_filename` ,`position`)
			VALUES ( NULL , '$name',  '$description',  '$percorso',  '$position');
 ");

//$ultimo_id=mysql_insert_id();

 

if($oid){
	
	move_uploaded_file($nome_file_temporaneo,$percorso);
    	header("location: materieprime_manager.php");
 } 
 else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
}



    
?>


