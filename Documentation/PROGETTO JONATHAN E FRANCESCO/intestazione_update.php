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

if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/intestazione/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso);

		$oid = mysql_query(" 
						UPDATE  `progetto`.`page` 
						SET  
						`titolo` =  '$title', 
						`image_filename` = '$percorso' 
						WHERE  
						`page`.`ID` = '$id' ");	
}

else{
	$oid = mysql_query(" 
						UPDATE  `progetto`.`page` 	
						SET  	
						`titolo` =  '$title' 
						WHERE  `page`.`ID` = '$id' ");
	
}




if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: intestazione_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>

