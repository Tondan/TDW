<?php

	Class tabella_caffetteria extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$menu = new Template("html/{$pars['template']}.html");
			
			$oid = mysql_query("SELECT * FROM tdw.caffetteria WHERE ID_Caffetteria=0");
			if (!$oid) {
				trigger_error("error");
			}
			$data = mysql_fetch_array($oid);
				
            if ($data) {
				$menu->setContent("ImgUp",$data['Img']);
            }
            
			$oid = mysql_query("SELECT * FROM tdw.caffetteria WHERE ID_Caffetteria>0");
			if (!$oid) {
				trigger_error("error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$menu->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
			
			return $menu->get();
		}
		
	}
?>