<?php

	Class tabella_recensioni extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$rec = new Template("html/{$pars['template']}.html");
			 
              
			$oid = mysql_query("SELECT * FROM tdw.recensione");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$rec->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
			
			return $rec->get();
		}
		
	}
?>