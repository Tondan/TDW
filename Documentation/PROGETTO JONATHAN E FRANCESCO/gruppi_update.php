<?php
session_start();
require "include/auth.inc.php";
require("include/dbms.inc.php");

$id          = $_POST['key'];
$name        = $_POST['nome'];
$description = $_POST['descrizione'];

echo $name,"<br>\n";
echo $description,"<br>\n";




$oid = mysql_query(" UPDATE  `progetto`.`groups` SET  `name` =  '$name',
`description` =  '$description' WHERE  `groups`.`ID` ='$id' ");




if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: gruppi_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


