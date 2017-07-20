<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";

$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$ingredienti   = mysql_real_escape_string($_POST['ingredienti']);
$prezzo        = mysql_real_escape_string($_POST['prezzo']);
$tipo_piatto   = mysql_real_escape_string($_POST['pasto']);
$key           = mysql_real_escape_string($_POST['key']);
$keyImg        = mysql_real_escape_string($_POST['keyImg']);

$switch = $_POST['switch'];  //radio button


/*
echo $nome,"<br>\n";
echo $descrizione,"<br>\n";
echo $ingredienti,"<br>\n";
echo $prezzo,"<br>\n";
echo $orario_pasto,"<br>\n";
echo $presentazione,"<br>\n";
echo $piattodelgiorno,"<br>\n";*/


if($switch=="update"){ 
    require "upload_in_Img.php";
    $oid = mysql_query(" UPDATE  tdw.piatto SET  Nome_Piatto =  '$nome', Descrizione =  '$descrizione', Ingredienti = '$ingredienti', Prezzo =  '$prezzo', Img= '$target_file', tipo_piatto='$tipo_piatto' WHERE Nome_Piatto ='$key';");
    
    if($oid){
        $idd=mysql_query("DELETE FROM tdw.immagine WHERE Link='$keyImg'");
        if($idd)
            unlink($keyImg);
    }


if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; piatti_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
        } //fine switch==1  


else if($switch=="delete"){
    
    $idd = mysql_query("DELETE FROM tdw.piatto WHERE Nome_Piatto='$key'");
       
if($idd){
    $idd=mysql_query("DELETE FROM tdw.Immagine WHERE Link='$keyImg'");
        if($idd)
            unlink($keyImg);
    echo("<br>delete avvenuto correttamente");
    header("refresh:2; piatti_manager.php");
} else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
}     
?>
