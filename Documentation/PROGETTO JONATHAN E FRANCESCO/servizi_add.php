<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$name =$_POST['nome'];
$script= $_POST['script'];
$description= $_POST['descrizione'];
$idgruppo   = $_POST['gruppo'];

echo $name,"<br>\n";
echo $script,"<br>\n";
echo $description,"<br>\n";
echo $idgruppo,"<br>\n";


$oid = mysql_query(" INSERT INTO  `progetto`.`services` ( `script` , `name` , `description`)
VALUES ('$script',  '$name',  '$description' );

 ");




if($oid){
    $gruppi= mysql_query(" 
         INSERT INTO  `progetto`.`groups_services` ( `id_group` , `script` , `ID`)
         VALUES ('$idgruppo',  '$script' , NULL);
    ");
	if($gruppi){
		header("location: servizi_manager.php");
	}
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


	

