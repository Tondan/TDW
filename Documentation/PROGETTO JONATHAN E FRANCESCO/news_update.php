<?php
session_start();

require "include/dbms.inc.php";
require "include/auth.inc.php";

$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];
$date= $_POST['data'];
$name_writer = $_POST['nome_scrittore'];
$name_category = 'news';
$title =$_POST['titolo'];
$subtitle= $_POST['sottotitolo'];
$text = $_POST['testo'];
$id = $_POST['key'];


echo $date,"<br>\n";
echo $name_writer,"<br>\n";
echo $name_category,"<br>\n";
echo $title,"<br>\n";
echo $subtitle,"<br>\n";
echo $text,"<br>\n";


if(file_exists($nome_file_temporaneo)){
  $percorso="skins/images/news/".$nome_file;
  move_uploaded_file($nome_file_temporaneo,$percorso);
	$oid = mysql_query(" UPDATE  `progetto`.`notizie`
                           SET  `data` =  '$date',
                                `nome_scrittore` =  '$name_writer', 
                                `titolo` =  '$title',
                                `sottotitolo` =  '$subtitle', 
                                `testo` =  '$text',
                                `image_filename` = '$percorso' 
                                WHERE  `notizie`.`ID` = '$id' ");}
else{
  $oid = mysql_query(" UPDATE  `progetto`.`notizie`
                           SET  `data` =  '$date',
                                `nome_scrittore` =  '$name_writer', 
                                `titolo` =  '$title',
                                `sottotitolo` =  '$subtitle', 
                                `testo` =  '$text'              
                                WHERE  `notizie`.`ID` = '$id' ");
}

if($oid){
  header("location: news_manager.php");
}
else{
    echo("<br>Aggiornamento non eseguito");
}
  

?>

