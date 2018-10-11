<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$oldscript   = $_POST['key'];
$script      = $_POST['script'];
$name        = $_POST['nome'];
$description = $_POST['descrizione'];
$idgruppo   = $_POST['gruppo'];
$keygroupservices   = $_POST['keygroupservices'];

echo $name,"<br>\n";
echo $description,"<br>\n";
echo $script,"<br>\n";
echo $oldscript,"<br>\n";




$oid = mysql_query(" UPDATE  `progetto`.`services` SET  `script` =  '$script',
`name` =  '$name', `description` =  '$description' 
WHERE  `services`.`script` =  '$oldscript'; ");



if($oid){
	$srv = mysql_query(" UPDATE  `progetto`.`groups_services` SET  `id_group` =  '$idgruppo' WHERE  `groups_services`.`ID` ='$keygroupservices';
 ");
	if($srv){
		echo("<br>Inserimento avvenuto correttamente");
    header("location: servizi_manager.php");
	}
    
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


