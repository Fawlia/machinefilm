$(document).ready(function() {
	$("#myform").submit(function(event) {
		event.preventDefault();
		
		var formulaire = {
		"nom": $("#nom").val(),
		"prenom" : $("#prenom").val(),
		"mail" : $("#mail").val(),
		"mdp" : $("#mdp").val(),
		"mdpconf" : $("#mdpconf").val()
		}
		
		
		$.ajax({
            url: "http://localhost/machineafilmspagination/controler/connectprocess.php",
            type : 'POST',
            dataType: 'json',
            data : formulaire, 
			
            success: function(success){
				
				console.log(success.length);
                if (success.length !== 0){				
				
					if((success.nom == "empty") || (success.nom == "short")){
						$('#nom').css('border', "2px red solid");
					}else{
						$('#nom').css('border', "2px green solid");
					}


					if((success.prenom == "empty") || (success.prenom == "short")){
						$('#prenom').css('border', "2px red solid");
					}else{
						$('#prenom').css('border', "2px green solid");
					}

					if((success.mail == "empty") || (success.mail == "false")){
						$('#mail').css('border', "2px red solid");
					}else{
						$('#mail').css('border', "2px green solid");
					}

					if((success.mdp == "empty") || (success.mdp == "short")){
						$('#mdp').css('border', "2px red solid");
					}else{
						$('#mdp').css('border', "2px green solid");
					}

					if((success.mdpconf == "empty") || (success.mdpconf == "notsame")){
						$('#mdpconf').css('border', "2px red solid");
						/*document.getElementById('BABAR').innerHTML = 'La confirmation n"est pas bonne!';*/
					}else{
						$('#mdpconf').css('border', "2px green solid");
					}
				}
				
				else {
					document.location.href="http://localhost/machineafilmspagination/inscriptionok";
					
					 }
				
            },
            error: function(){
                console.log('REQUETE AJAX DEAD       ');
            },
            
        });
		
	}); 
});


