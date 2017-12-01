<?php


function verifMovie(){
	
	$error = [];
				
	$_POST['annee'] = intval($_POST['annee']);

	if (isset($_POST["titre"])){

		if(empty($_POST["titre"])){
			
			$error['titre'] = "empty";
			
		}

			if (strlen($_POST["titre"]) < 2 )
					{$error['titre'] = "short";}
			}

			if (isset($_POST["annee"])){

				if(empty($_POST["annee"]))
					{$error['annee'] = "empty";}

				if ((strlen($_POST['annee']) >4) || (strlen($_POST['annee']) <4) ||((($_POST)['annee']) >2019) || ((($_POST)['annee']) <1900))
					{$error['annee'] = "short";}
			}

			if (isset($_POST["realisateur"])){

				if(empty($_POST["realisateur"]))
					{$error["realisateur"] = "empty";}

				 if (strlen($_POST["realisateur"]) < 2 || strlen($_POST["realisateur"]) > 50 )
					{$error["realisateur"] = "false";}
			}

			if (isset($_POST["description"])){

				if(empty($_POST["description"]))
						{$error["description"] = "empty";}

				if (strlen($_POST["description"]) < 50 )
					{$error['description'] = "short";}
				}
	
	
	return $error;
	
}





?>