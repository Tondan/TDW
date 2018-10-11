<?php  
	
	$main = new Template("skins/html/frame-public.html");
	$body = new Template("skins/html/contact-us.html");
	
	$main->setContent("body", $body->get());
	$main->close();
?>
