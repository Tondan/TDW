<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";

/*
$nome_file_temporaneo = $_FILES['file_inviato']['tmp_name'] ;
$nome_file   = $_FILES["file_inviato"]["name"];
$tipo_file   = $_FILES["file_inviato"]["type"];*/
$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$ingredienti   = mysql_real_escape_string($_POST['ingredienti']);
$prezzo        = mysql_real_escape_string($_POST['prezzo']);
$tipo_piatto   = mysql_real_escape_string($_POST['pasto']);
$img           = mysql_real_escape_string($_POST['img']);
$key           = mysql_real_escape_string($_POST['key']);
/*
echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $prezzo,"<br>\n";
echo $orario_pasto,"<br>\n";
echo $presentazione,"<br>\n";
echo $piattodelgiorno,"<br>\n";

if(file_exists($nome_file_temporaneo)){
    $percorso="skins/images/piatti/".$nome_file;
    move_uploaded_file($nome_file_temporaneo,$percorso);*/
    
    $imdb= mysql_query("SELECT Link FROM tdw.Immagine WHERE Link='$img'");
    if(mysql_num_rows($imdb)==1)
	   $oid = mysql_query(" UPDATE  tdw.piatto SET  Nome_Piatto =  '$nome', Descrizione =  '$descrizione', Ingredienti = '$ingredienti', Prezzo =  '$prezzo', Img= '$img', tipo_piatto='$tipo_piatto' WHERE Nome_Piatto ='$key';");
    else{
        $oid = mysql_query(" INSERT INTO tdw.Immagine(Link) VALUES ('$img')");
        if($oid)
            $oid = mysql_query(" UPDATE  tdw.piatto SET  Nome_Piatto =  '$nome',    Descrizione =  '$descrizione', Ingredienti = '$ingredienti',        Prezzo =  '$prezzo', Img= '$img', tipo_piatto='$tipo_piatto'        WHERE Nome_Piatto ='$key';");
    }
// }
/*
else{
    $oid = mysql_query(" 
         UPDATE  `progetto`.`piatti` SET  
                 `nome` =  '$nome',
                 `descrizione` =  '$descrizione',
                 `ingredienti` =  '$ingredienti',
                 `prezzo` =  '$prezzo',
                 `orario_pasto` =  '$orario_pasto',
                 `flag_presentazione` =  '$presentazione',
                 `flag_del_giorno` =  '$piattodelgiorno' 
                 WHERE  `piatti`.`ID` ='$id';
   ");


}
*/




if($oid){
    echo("<br>Inserimento avvenuto correttamente");
    header("location: piatti_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

?>
