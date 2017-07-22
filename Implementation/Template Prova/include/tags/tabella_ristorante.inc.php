<?php

	Class tabella_ristorante extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$art = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
            
            $oid = mysql_query("SELECT * FROM tdw.Rist_Pizz WHERE ID_Rist_Pizz=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
            $data = mysql_fetch_array($oid);
				
            if ($data) {
					$art->setContent("ImgUp",$data['Img']);
				}
            
            $oid = mysql_query("SELECT * FROM tdw.Rist_Pizz WHERE ID_Rist_Pizz>0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do{
                $data = mysql_fetch_array($oid);
                if($data){
                    $art->setContent($data);
				}
			}while($data);
			return $art->get();
		}
		
	}
?>