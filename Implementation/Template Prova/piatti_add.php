<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";

/*
$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file = $_FILES["file_inviato"]["name"];
$tipo_file = $_FILES["file_inviato"]["type"];*/
$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$ingredienti   = mysql_real_escape_string($_POST['ingredienti']);
$prezzo        = mysql_real_escape_string($_POST['prezzo']);
$tipo_piatto   = mysql_real_escape_string($_POST['tipo_piatto']);
$img           = mysql_real_escape_string($_POST['img']);



/*echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $prezzo,"<br>\n";
echo $tipo_piatto,"<br>\n";
echo $img,"<br>\n";*/


/*
if(file_exists($nome_file_temporaneo)){
	$percorso="skins/images/piatti/".$nome_file;
	move_uploaded_file($nome_file_temporaneo,$percorso);*/
$imdb= mysql_query("SELECT Link FROM tdw.Immagine WHERE Link='Img/$img'");
if(mysql_num_rows($imdb)==1)
    $oid = mysql_query(" INSERT INTO  tdw.piatto (Nome_piatto, Descrizione, Ingredienti, Prezzo,Img,tipo_piatto) VALUES ('$nome',  '$descrizione',  '$ingredienti', '$prezzo', 'Img/$img', '$tipo_piatto');");
else{
    $oid=mysql_query(" INSERT INTO tdw.Immagine(Link) VALUES ('Img/$img')");
    if($oid)
        $oid = mysql_query(" INSERT INTO  tdw.piatto (Nome_piatto, Descrizione, Ingredienti, Prezzo,Img,tipo_piatto) VALUES ('$nome',  '$descrizione',  '$ingredienti', '$prezzo', 'Img/$img', '$tipo_piatto');");
}
    //}
/*
else{
	$oid = mysql_query(" 
				INSERT INTO  `progetto`.`piatti` (
							`ID` , 
							`nome` , 
							`descrizione` , 
							`ingredienti` , 
							`prezzo` , 
							`orario_pasto` , 
							`flag_presentazione` , 
							`flag_del_giorno` )
				VALUES ( 
							NULL ,  
							'$nome',  
							'$descrizione',  
							'$ingredienti',  
							'$prezzo' ,
							'$orario_pasto',  
							'$presentazione' ,     
							'$piattodelgiorno' );

 ");

}
 
*/
if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: piatti_manager.php");
} else{
    echo("<br>Inserimento non eseguito<br>");
     echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
  
?>

