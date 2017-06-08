<?php


    class storyBody extends TagLibrary {
		
		function dummy() {
			
		}
        
        function getstory($name, $data, $pars) {
			
			$story = new Template("html/{$pars['template']}.html");
			
			if (!isset($pars['parent'])) {
				$pars['parent'] = $data;
			}
			
              
			$oid = mysql_query("SELECT * FROM tdw.Immagine WHERE Link='Img/story.jpg' ");
			if (!$oid) {
				trigger_error("Menu error");
			}
			
			do {
				$data = mysql_fetch_array($oid);
				
				if ($data) {
					$story->setContent($data);
				}
			} while ($data);
            
            $oid = mysql_query("SELECT * FROM tdw.Storia WHERE ID_Storia%2!=0 LIMIT=2");
			if (!$oid) {
				trigger_error("Menu error");
            }
            
            do{
            $data = mysql_fetch_array($oid);
				
				if ($data) {
					$story->setContent("TitoloGiallo",$data['Titolo']);
                    $story->setContent("DescrizioneGiallo",$data['Descrizione']);
                    $story->setContent("ImgGiallo",$data['Img']);
				}
            } while ($data);
            
            $oid = mysql_query("SELECT * FROM tdw.Storia WHERE ID_Storia%2=0 LIMIT 2");
			if (!$oid) {
				trigger_error("Menu error");
            }
            
            do{
            $data = mysql_fetch_array($oid);
				
				if ($data) {
					$story->setContent("TitoloBianco",$data['Titolo']);
                    $story->setContent("DescrizioneBianco",$data['Descrizione']);
                    $story->setContent("ImgBianco",$data['Img']);
				}
            } while ($data);
            
            
			return $story->get();
		}
    }