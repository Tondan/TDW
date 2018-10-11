<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];
$nome          = $_POST['nome'];
$descrizione   = $_POST['descrizione'];
$ingredienti   = $_POST['ingredienti'];
$prezzo        =$_POST['prezzo'];
$orario_pasto  = $_POST['tipo'];
$presentazione = $_POST['presentazione'];
$piattodelgiorno = $_POST['piattodelgiorno'];


echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $prezzo,"<br>\n";
echo $orario_pasto,"<br>\n";
echo $presentazione,"<br>\n";
echo $piattodelgiorno,"<br>\n";

if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/piatti/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso);
$oid = mysql_query(" 
				INSERT INTO  `progetto`.`piatti` (
							`ID` , 
							`nome` , 
							`descrizione` , 
							`ingredienti` , 
							`prezzo` , 
							`image_filename`,
							`orario_pasto` , 
							`flag_presentazione` , 
							`flag_del_giorno` )
				VALUES ( 
							NULL ,  
							'$nome',  
							'$descrizione',  
							'$ingredienti',  
							'$prezzo' ,
							'$percorso', 
							'$orario_pasto',  
							'$presentazione' ,     
							'$piattodelgiorno' );

 ");}
else{
	$oid = mysql_query(" 
				INSERT INTO  `progetto`.`piatti` (
							`ID` , 
							`nome` , 
							`descrizione` , 
							`ingredienti` , 
							`prezzo` , 
							`orario_pasto` , 
							`flag_presentazione` , 
							`flag_del_giorno` )
				VALUES ( 
							NULL ,  
							'$nome',  
							'$descrizione',  
							'$ingredienti',  
							'$prezzo' ,
							'$orario_pasto',  
							'$presentazione' ,     
							'$piattodelgiorno' );

 ");

}
 

if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: piatti_manager.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>

