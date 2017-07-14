<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$entry   = $_POST['entry'];
$link    = $_POST['link'];
$parent  =$_POST['parent'];
$position= $_POST['position'];


echo($entry);
echo($link);
echo($parent);
echo($position);


$oid = mysql_query(" INSERT INTO `progetto`.`menu` (`ID`, `entry`, `link`, `parent`, `position`) 
	                 VALUES (NULL, '$entry', '$link', '$parent', '$position');
 ");
 

if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: menu_manager.php");
} else{
    echo("<br>Inserimento non eseguito");
  }
    
?>
