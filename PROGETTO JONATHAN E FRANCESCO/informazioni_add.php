<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$name =$_POST['nome'];
$description= $_POST['descrizione'];
$class = $_POST['classe'];

echo $name,"<br>\n";
echo $description,"<br>\n";
echo $class,"<br>\n";

$oid = mysql_query(" INSERT INTO `progetto`.`informazioni` (`ID`, `nome`, `descrizione`, `class`) 
	VALUES (NULL, '$name', '$description', '$class');

 ");

if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: informazioni_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


