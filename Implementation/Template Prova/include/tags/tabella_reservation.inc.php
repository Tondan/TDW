<?php

	Class tabella_reservation extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$art = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
            
            $oid = mysql_query("SELECT * FROM tdw.presentazione_reservation");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
                $data = mysql_fetch_array($oid);
                if($data){
                    $art->setContent($data);
				}
			return $art->get();
		}
		
	}
?>