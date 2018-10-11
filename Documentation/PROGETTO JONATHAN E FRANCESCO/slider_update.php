<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$titolo      = $_POST['titolo'];
$sottotitolo = $_POST['sottotitolo'];
$button      = $_POST['button'];
$link        = $_POST['link'];
$id          = $_POST['key'];



echo $titolo,"<br>\n";
echo $sottotitolo,"<br>\n";
echo $button,"<br>\n";
echo $link,"<br>\n";


$oid = mysql_query(" 
          UPDATE  `progetto`.`slider` SET  `titolo` =  '$titolo', 
                                           `sottotitolo` =  '$sottotitolo',
                                           `button` =  '$button',
                                           `link` =  '$link' 
          WHERE  `slider`.`ID` =$id;

 ");

if($oid){
      header("location: slider_manager.php");

 } 
 else{
    echo("<br>Inserimento non eseguito");
  }
  
?>