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


echo $date,"<br>\n";
echo $name_writer,"<br>\n";
echo $name_category,"<br>\n";
echo $title,"<br>\n";
echo $subtitle,"<br>\n";
echo $text,"<br>\n";


if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/news/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso);
	$oid = mysql_query(" 
	INSERT INTO `progetto`.`notizie` (`ID`, 
									`ID_categoria`, 
									`data`, 
									`nome_scrittore`, 
									`nome_categoria`, 
									`titolo`, 
									`sottotitolo`, 
									`testo`, 
									`image_filename`) 
							VALUES (NULL, 
									'1', 
									'$date', 
									'$name_writer', 
									'$name_category', 
									'$title', 
									'$subtitle', 
									'$text', 
									'$percorso');

 ");
}
 else{
 $oid=mysql_query("
 INSERT INTO `progetto`.`notizie` (`ID`, 
									`ID_categoria`, 
									`data`, 
									`nome_scrittore`, 
									`nome_categoria`, 
									`titolo`, 
									`sottotitolo`, 
									`testo`) 
							VALUES (NULL, 
									'1', 
									'$date', 
									'$name_writer', 
									'$name_category', 
									'$title', 
									'$subtitle', 
									'$text');
 ");
 }

if($oid){
	header("location: news_manager.php");
}
else{
    echo("<br>Inserimento non eseguito");
}
  
?>

