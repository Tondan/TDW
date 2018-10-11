<?php
session_start();
require "include/template2.inc.php";
require "include/dbms.inc.php";
require "include/auth.inc.php";


    $main = new Template("skins/html/frame-private.html");
    $body = new Template("skins/html/utenti_manager.html");

$oid = mysql_query("  SELECT ID , name  FROM groups ");
			
			if (!$oid) {
				echo("error");
			}
			
			do {
				$data = mysql_fetch_array($oid);

				
				if ($data) {
					$body->setContent($data);
					
				}
			} while ($data);

    

    $main->setContent("body", $body->get());
    $main->close();

?>



