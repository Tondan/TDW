<?php

class caffbody extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getcaffetteria($name, $data, $pars) {
			
			$caff = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
            
            $oid = mysql_query("SELECT * FROM tdw.Immagine WHERE Link='Img/caffetteria.jpg'");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
				$data = mysql_fetch_array($oid);
                if ($data) 
					$caff->setContent($data);
			
              
			$oid = mysql_query("SELECT * FROM tdw.Caffetteria");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			for($i=1;$i<=3;$i++){
                $data = mysql_fetch_array($oid);
                if($data){
                    $caff->setContent("Icona".$i,$data['Icona']);
					$caff->setContent("Titolo".$i,$data['Titolo']);
                    $caff->setContent("Img".$i,$data['Img']);
                    $caff->setContent("Descrizione".$i,$data['Descrizione']);
				}
			}
			return $caff->get();
		}
}