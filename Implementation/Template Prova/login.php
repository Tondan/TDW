<?php

session_start();                //solo nel php di backoffice
require_once "include/auth.inc.php";

require ("include/template2.inc.php");
require ("include/dbms.inc.php");


$main = new Template("html/index.html");
$body = new Template("html/login.html");

$main->setContent("body", $body->get());
$main->close();

?>
