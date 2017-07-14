<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$id        = $_POST['key'];
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

if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/team/".$nome_file_vero;
	move_uploaded_file($nome_file_temporaneo,$percorso);

	$oid = mysql_query(" 
          UPDATE  `progetto`.`team` SET 
                `nome` =  '$nome',
				`cognome` =  '$cognome',
				`ruolo` =  '$ruolo',
				`descrizione` =  '$descrizione',
				`image_filename` =  '$percorso' 
		  WHERE  `team`.`ID` ='$id';
    ");

}
else{
	$oid = mysql_query(" 
           UPDATE  `progetto`.`team` SET 
                `nome` =  '$nome',
				`cognome` =  '$cognome',
				`ruolo` =  '$ruolo',
				`descrizione` =  '$descrizione'
		   WHERE  `team`.`ID` ='$id';
    ");
}


if($oid){
	header("location: team_manager.php");
}
else{
    echo("<br>Inserimento non eseguito");
}
  
?>