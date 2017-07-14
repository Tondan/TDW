function getUrlVars() {
		    var vars = [], hash;
		    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		    for(var i = 0; i < hashes.length; i++)
		    {
		        hash = hashes[i].split('=');
		        vars.push(hash[0]);
		        vars[hash[0]] = hash[1];
		    }
		    return vars;
		}
		
			
			$().ready(function(){
				
				
				if (getUrlVars()['result']) {
					
					$("div.message").prepend("<div id='message' style='font-family: arial; color: #4444dd; opacity: 0.9; position: absolute;z-index: 10; width: 290px; height: 150px; border-radius: 10px; background-color: #88ddff; right: 10px; top:10px; padding: 10px;'><div>");
		
					var message;
					
					switch(getUrlVars()['result']) {
					case "ok":
						$('#message').css({'background-color': '#9999ff', 'color': '#aa1111' });
						message = '<strong>evviva!</strong><br><br>richiesta inviata!';
						break;
					
					case "ko":
						$('#message').css({'background-color': '#ffdddd', 'color': '#aa4444' });
						message = '<strong>Warning</strong><br><br>errore! richiesta non inviata!';
						break;
					
					case "userunknown":
						$('#message').css({'background-color': '#9999ff', 'color': '#aa1111' });
						message = '<strong>errore</strong><br><br>nome utente o password errati!';
						break;
					}
					$('#message')
						.html(message)
						.hide()
						.fadeIn()
						.click(function(){
							$(this).fadeOut();
						});
					
					
				} 
			});

	
