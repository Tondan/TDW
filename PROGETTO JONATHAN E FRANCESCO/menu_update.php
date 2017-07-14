<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$id      = $_POST['key'];
$entry   = $_POST['entry'];
$link    = $_POST['link'];
$parent  =$_POST['parent'];
$position= $_POST['position'];

echo($id);
echo($entry);
echo($link);
echo($parent);
echo($position);


$oid = mysql_query(" UPDATE  `progetto`.`menu` SET  `entry` =  '$entry',
`link` =  '$link', `parent` =  '$parent', `position` =  '$position'  WHERE  `menu`.`ID` = '$id' ");



if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: menu_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>


