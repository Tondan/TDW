<?php

    
    class logo extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getlogo($name, $data, $pars) {
			
			$logo = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Logo LIMIT 1");
			if (!$oid) {
				trigger_error("Menu error");
			}
            
			do {
				$data = mysql_fetch_array($oid);
				if ($data) {
					$logo->setContent($data);
					//$menu->setContent("Nome", $data['Nome']);
					//$menu->setContent("Link", $data['Link']);
				}
			} while ($data);
        
			return $logo->get();
		}
		
	}