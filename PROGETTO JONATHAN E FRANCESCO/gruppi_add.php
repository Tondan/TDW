<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$name =$_POST['nome'];
$description= $_POST['descrizione'];


echo $name,"<br>\n";
echo $description,"<br>\n";


$oid = mysql_query(" INSERT INTO  `progetto`.`groups` (`ID` ,`name` ,`description`)
                      VALUES ( NULL ,  '$name',  '$description' );

 ");





if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: gruppi_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


