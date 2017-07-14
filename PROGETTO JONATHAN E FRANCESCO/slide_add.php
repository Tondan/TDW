<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome_file_temporaneo = $_FILES["file_inviato"]["tmp_name"];
$nome_file_vero = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];

// Leggo il contenuto del file
$dati_file = file_get_contents($nome_file_temporaneo);

// Preparo il contenuto del file per la query sql
$dati_file = addslashes($dati_file);


$inviato=file_exists($nome_file_temporaneo);
echo $inviato;

$slider      = $_POST['slider'];
$position = $_POST['position'];


echo $slider,"<br>\n";
echo $position,"<br>\n";

$percorso="skins/images/top-slider/".$nome_file_vero;


$oid = mysql_query(" 
					INSERT INTO `progetto`.`slide` (`ID`, `id_slider`,
					 `image_filename`, `position`) VALUES (NULL, '$slider','$percorso', '$position');

 ");
//$ultimo_id=mysql_insert_id();

 

if($oid){
	
	move_uploaded_file($nome_file_temporaneo,$percorso);
    	header("location: slide_manager.php");
 } 
 else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
}
  
?>


