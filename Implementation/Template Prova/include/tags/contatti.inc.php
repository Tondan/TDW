<?php


    class contatti extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getcontact($name, $data, $pars) {
			
			$contact = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            
              
			$oid = mysql_query("SELECT * FROM tdw.Contatti");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$contact->setContent("Titolo",$data['Titolo']);
                    $contact->setContent("Indirizzo",$data['Indirizzo']);
                    $contact->setContent("Tel",$data['Tel']);
                    $contact->setContent("Fax",$data['Fax']);
                    $contact->setContent("Email",$data['Email']);
                    $contact->setContent("Descrizione",$data['Descrizione']);
                    $contact->setContent("Img",$data['Img']);
					
				}
			} while ($data);         
            
           $oid = mysql_query("SELECT * FROM tdw.Orario");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
                    $contact->setContent($data);
					
                }
			} while ($data);
            
            
            
            
			return $contact->get();
		}
        
        
        
        
    }