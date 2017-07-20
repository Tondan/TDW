<?php

session_start();

require "include/dbms.inc.php";
require "include/auth1.inc.php";


$username          = mysql_real_escape_string($_POST['username']);
$password          = mysql_real_escape_string($_POST['password']);
$passwordRip       = mysql_real_escape_string($_POST['passwordRip']);
$key               = mysql_real_escape_string($_POST['key']);

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
    
    if($password==$passwordRip){
        $oid = mysql_query(" DELETE FROM  tdw.usergroups WHERE username='$key';");
        $oid = mysql_query(" UPDATE  tdw.users SET username='$username',password=md5('$password') WHERE username='$key';");
        $oid = mysql_query(" INSERT INTO  tdw.usergroups (username,id_group) VALUES ('$username','1');");
    }
    else{
        echo("<br>ERRORE PASSWORD<br>");
        header("refresh:2; utenti_manager.php");
    }





if($oid){
    echo("<br>update avvenuto correttamente");
    header("refresh:2; admin.php");
} else{

    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }

    
        } //fine switch==1  


else if($switch=="delete"){
    
    $idd = mysql_query("DELETE FROM tdw.usergroups WHERE username='$key'");
       
if($idd){
    mysql_query("DELETE FROM tdw.users WHERE username='$key'");
    echo("<br>delete avvenuto correttamente");
    header("refresh:2; admin.php");
} else{
    echo("Errore Numero: ".mysql_errno()." - Descrizione: ".mysql_error());
  }
}     
?>