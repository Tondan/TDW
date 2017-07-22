<?php

	Class tabella_lgallery extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getmenu($name, $data, $pars) {
			
			$littlegll = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Immagine WHERE SUBSTRING(Link,5,8)='LGallery' LIMIT 6");
			if (!$oid) {
				trigger_error("Menu error");
			}
            for($i=1;$i<=6;$i++){
                $data = mysql_fetch_array($oid);
                if($data)
                    $littlegll->setContent("Img".$i,$data['Link']); 
            }
            
            return $littlegll->get();
		}
		
	}