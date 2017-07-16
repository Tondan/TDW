<?php



require ("include/template2.inc.php");
require ("include/dbms.inc.php");
require ("include/system.inc.php");

$main = new Template("html/index.html");
$body = new Template("html/dashboard.html");

$main->setContent("body", $body->get());
$main->close();

?>
