<?php

session_start();

require "include/template2.inc.php";
require "include/dbms.inc.php";
require "include/auth1.inc.php";



    
    $main = new Template("html/index.html");
    $body = new Template("html/piatti_manager.html");

     
    $main->setContent("body", $body->get());
    $main->close();
    
?>


