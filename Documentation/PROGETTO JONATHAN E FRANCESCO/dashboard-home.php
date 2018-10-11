<?php
    
    require_once 'include/template2.inc.php';
	require_once 'include/dbms.inc.php';
	require("include/system.inc.php");
    $main = new Template("skins/html/frame-public.html");
    $body = new Template("skins/html/dashboard-home.html");

     
    $main->setContent("body", $body->get());
    $main->close();
    
?>


