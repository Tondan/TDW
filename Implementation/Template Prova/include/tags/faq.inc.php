<?php


    class faq extends TagLibrary {
		
		function dummy() {
			
		}
		
		function getfaq($name, $data, $pars) {
			
			$faq = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
            $oid = mysql_query("SELECT * FROM tdw.FAQ WHERE ID_FAQ=0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			
            $data = mysql_fetch_array($oid);
				
            if ($data) {
				$faq->setContent("Link",$data['Img']);

			} 
              
			$oid = mysql_query("SELECT * FROM tdw.FAQ WHERE ID_FAQ>0");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$faq->setContent($data);
					//$menu->setContent("link", $data['link']);
					//$menu->setContent("entry", $data['entry']);
				}
			} while ($data);
            
			return $faq->get();
		}
    }