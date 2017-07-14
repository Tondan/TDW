<?php

	Class piattigustosi2 extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getgustosi($name, $data, $pars) {
			
			$menu = new Template("skins/html/{$pars['template']}.html");
			
			
			
	$oid = mysql_query("SELECT * FROM `piatti` WHERE flag_presentazione = '{$pars['presentazione']}'");
			if (!$oid) {
				trigger_error(" error");
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