<?php


    class footer extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getfooter($name, $data, $pars) {
			
			$foot = new Template("html/{$pars['template']}.html");
			
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
					$foot->setContent($data);
					//$menu->setContent("Nome", $data['Nome']);
					//$menu->setContent("Link", $data['Link']);
				}
			} while ($data);
              
			$oid = mysql_query("SELECT * FROM tdw.Footer");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$foot->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
            $oid = mysql_query("SELECT Descrizione AS DescrizioneApertura,Giorno,Orario FROM tdw.Contatti,tdw.Orario");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$foot->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $foot->get();
		}
    
    }