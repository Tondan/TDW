
$().ready(function(){
	$('button#elimina').click(function(){
		debugger;
		$.ajax({
            method: 'POST',                    // tipo di richiesta HTTP
            url : 'script.php',               // percorso allo script lato server
            data: "last=1&order=desc",        // parametro opzionale, per impostare la query string da inviare
            dataType : 'json',                // parametro opzionale, formato dei dati (xml, json, script, o html)
            success: function (data) {        // istruzioni richiamate al termine della richiesta
                    debugger;  
            }
        });
			
	});
});

/*	
function cancella(){
debugger;
};



$('button').click(function() {
    $.ajax({
        url: 'crea_directory.php',
        success: function(){
             alert('Creazione della directory avvenuta con successo.');
        }
    });
    return false;
});
*/

	

