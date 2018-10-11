<?php
session_start();
require "include/template2.inc.php";
require "include/dbms.inc.php";
require "include/auth.inc.php";



    
    $main = new Template("skins/html/frame-private.html");
    $body = new Template("skins/html/intestazione_manager.html");

     
    $main->setContent("body", $body->get());
    $main->close();
    
?>


