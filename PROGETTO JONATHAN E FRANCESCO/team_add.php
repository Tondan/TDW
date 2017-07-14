<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome        = $_POST['nome'];
$cognome     = $_POST['cognome'];
$ruolo       = $_POST['ruolo'];
$descrizione = $_POST['descrizione'];

echo $nome,"<br>\n";
echo $cognome,"<br>\n";
echo $ruolo,"<br>\n";
echo $descrizione,"<br>\n";

$nome_file_temporaneo = $_FILES["file_inviato"]["tmp_name"];
$nome_file_vero = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];

$inviato=file_exists($nome_file_temporaneo);
echo $inviato;

$percorso="skins/images/team/".$nome_file_vero;

$oid = mysql_query(" 
	    		INSERT INTO `progetto`.`team` (
	    		`ID`, 
	    		`nome`, 
	    		`cognome`, 
	    		`ruolo`, 
	    		`descrizione`, 
	    		`image_filename`) 
	    		VALUES (
	    		NULL, 
	    		'$nome', 
	    		'$cognome', 
	    		'$ruolo', 
	    		'$descrizione', 
	    		'$percorso');

 ");

if($oid){
	
	move_uploaded_file($nome_file_temporaneo,$percorso);
    	header("location: team_manager.php");
 } 
 else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
}
  
?>


