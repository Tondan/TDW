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

if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/materieprime/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso);
	$oid = mysql_query(" 
          UPDATE  `progetto`.`materieprime` 
		SET  
				`nome` =  '$name',
				`descrizione` =  '$description',
		 		`position` = '$position',
		 		`image_filename` = '$percorso'
		WHERE  `materieprime`.`ID` ='$id' ;

    ");

}
else{
	$oid = mysql_query(" 
          UPDATE  `progetto`.`materieprime` 
		SET  
		`nome` =  '$name',
		`descrizione` =  '$description',
		`position` = '$position' 
		WHERE  `materieprime`.`ID` ='$id';

    ");
}


if($oid){
	header("location: materieprime_manager.php");
}
else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
}
  

?>


