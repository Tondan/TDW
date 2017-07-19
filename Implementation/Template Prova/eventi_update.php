<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$nome          = mysql_real_escape_string($_POST['nome']);
$descrizione   = mysql_real_escape_string($_POST['descrizione']);
$data          = mysql_real_escape_string($_POST['data']);
$key           = mysql_real_escape_string($_POST['key']);

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
    
    $imdb= mysql_query("SELECT Link FROM tdw.Immagine WHERE Link='$img'");
    if(mysql_num_rows($imdb)==1)
	   $oid = mysql_query(" UPDATE  tdw.piatto SET  Nome_Piatto =  '$nome', Descrizione =  '$descrizione', Ingredienti = '$ingredienti', Prezzo =  '$prezzo', Img= '$img', tipo_piatto='$tipo_piatto' WHERE Nome_Piatto ='$key';");
    else{
        $oid = mysql_query(" INSERT INTO tdw.Immagine(Link) VALUES ('$img')");
        if($oid)
            $oid = mysql_query(" UPDATE  tdw.piatto SET  Nome_Piatto =  '$nome',    Descrizione =  '$descrizione', Ingredienti = '$ingredienti', Prezzo =  '$prezzo', Img= '$img', tipo_piatto='$tipo_piatto' WHERE Nome_Piatto ='$key';");
    }





if($oid){
    echo("<br>update avvenuto correttamente");
    header("location:piatti_manager.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
        } //fine switch==1  


else if($switch=="delete"){
    
    $idd = mysql_query("DELETE FROM tdw.piatto WHERE Nome_Piatto='$key'");
       
if($idd){
    echo("<br>delete avvenuto correttamente");
    header("location: piatti_manager.php");
} else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
}     
?>
