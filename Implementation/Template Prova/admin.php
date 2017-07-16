<?php


require ("include/dbms.inc.php");
require ("include/system.inc.php");
require_once ("include/auth1.inc.php");
require ("include/template2.inc.php");

$main = new Template("html/index.html");
$body = new Template("html/admin.html");

$main->setContent("body", $body->get());
$main->close();

?>
