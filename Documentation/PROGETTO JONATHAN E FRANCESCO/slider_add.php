<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";


$titolo      = $_POST['titolo'];
$sottotitolo = $_POST['sottotitolo'];
$button      = $_POST['button'];
$link        = $_POST['link'];

echo $titolo,"<br>\n";
echo $sottotitolo,"<br>\n";
echo $button,"<br>\n";
echo $link,"<br>\n";


$oid = mysql_query(" 
INSERT INTO `progetto`.`slider` (`ID`, `titolo`, `sottotitolo`, `button`, `link`) VALUES (NULL, '$titolo', '$sottotitolo', '$button', '$link');

 ");
 

if($oid){
    	header("location: slider_manager.php");

 } 
 else{
    echo("<br>Inserimento non eseguito");
  }
  
?>


