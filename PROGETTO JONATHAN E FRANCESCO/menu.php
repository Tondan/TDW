<?php  
	
	$main = new Template("skins/html/frame-public.html");
	$body = new Template("skins/html/menu.html");
	
	$main->setContent("body", $body->get());
	$main->close();
?>
