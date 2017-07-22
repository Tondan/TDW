<?php

class caffbody extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getcaffetteria($name, $data, $pars) {
			
			$caff = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
            
            $oid = mysql_query("SELECT * FROM tdw.Caffetteria WHERE ID_Caffetteria=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
				$data = mysql_fetch_array($oid);
                if ($data) 
					$caff->setContent("Link",$data['Img']);
			
              
			$oid = mysql_query("SELECT * FROM tdw.Caffetteria WHERE ID_Caffetteria>0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			for($i=1;$i<=3;$i++){
                $data = mysql_fetch_array($oid);
                if($data){
					$caff->setContent("Titolo".$i,$data['Titolo']);
                    $caff->setContent("Img".$i,$data['Img']);
                    $caff->setContent("Descrizione".$i,$data['Descrizione']);
				}
			}
			return $caff->get();
		}
}