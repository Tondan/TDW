<?php

	session_start();

	require_once "include/dbms.inc.php";
	require_once "include/auth.inc.php";
	require_once "include/template2.inc.php";

	$main = new Template("skins/html/frame-private.html");
	$body = new Template("skins/html/dashboard-login.html");
	
	$main->setContent("body", $body->get());
	$main->close();
	
?>