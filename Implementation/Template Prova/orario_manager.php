<?php
/*
session_start();     solo nel php di backoffice
require "include/auth.inc.php";
*/

require ("include/template2.inc.php");
require ("include/dbms.inc.php");


$main = new Template("html/indexin.html");
$body = new Template("html/orario_manager.html");

$main->setContent("body", $body->get());
$main->close();

?>
