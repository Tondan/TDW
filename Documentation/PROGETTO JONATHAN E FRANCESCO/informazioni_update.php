<?php
session_start();
require "include/auth.inc.php";
require("include/dbms.inc.php");

$id =$_POST['key'];
$name =$_POST['nome'];
$description= $_POST['descrizione'];
$class = $_POST['classe'];

echo $name,"<br>\n";
echo $description,"<br>\n";
echo $class,"<br>\n";

 
 
$oid = mysql_query(" UPDATE  `progetto`.`informazioni` SET  `nome` =  '$name',
`descrizione` =  '$description', `class` =  '$class' WHERE  `informazioni`.`ID` = '$id' ");




if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: informazioni_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>

