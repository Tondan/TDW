<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];
$id = $_POST['key'];
$title =$_POST['titolo'];
$subtitle= $_POST['sottotitolo'];
$description = $_POST['descrizione'];


echo $id,"<br>\n";
echo $title,"<br>\n";
echo $subtitle,"<br>\n";
echo $description,"<br>\n";


if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/storia/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso);
		$oid = mysql_query(" UPDATE  
						`progetto`.`storia` SET  
						`titolo` =  '$title', 
						`sottotitolo` =  '$subtitle', 
						`descrizione` =  '$description' , 
						`image_filename` = '$percorso'
						WHERE  `storia`.`ID` = '$id' ");
	
}

else{
	//query senza immagine
			$oid = mysql_query(" 	
				UPDATE  `progetto`.`storia` SET  	
				`titolo` =  '$title', 
				`sottotitolo` =  '$subtitle', 
				`descrizione` =  '$description'  
				WHERE  `storia`.`ID` = '$id' ");
	
}




if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: storia_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>

