<?php

    
    class headerMenuDx extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$menu = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Header WHERE Posizione = 'Dx' ");
			if (!$oid) {
				trigger_error("Menu error");
			}
            
			do {
				$data = mysql_fetch_array($oid);
				if ($data) {
					$menu->setContent($data);
					//$menu->setContent("Nome", $data['Nome']);
					//$menu->setContent("Link", $data['Link']);
				}
			} while ($data);
        
			return $menu->get();
		}
		
	}