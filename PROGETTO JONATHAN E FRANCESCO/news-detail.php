<?php  
	
	$main = new Template("skins/html/frame-public.html");
	$body = new Template("skins/html/news-detail.html");
	$id=$_GET[id];



$oid = mysql_query("SELECT * FROM notizie WHERE ID=$id");

if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$body->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
	
	
	$main->setContent("body", $body->get());
	$main->close();
?>
