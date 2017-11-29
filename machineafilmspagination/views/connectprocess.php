<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>La machine à Films</title>
	<link type="text/css" rel="stylesheet" href="../views/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="../views/css/style1.css">
	
	
	<meta property="og:title" content="Machine à Film"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://localhost:8090/machineafilmslier/"/>
    <meta property="og:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants"/>
    <meta property="og:site_name" content="La machine à Films"/>
    
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Machine à Film">
    <meta name="twitter:url" content="http://localhost:8090/machineafilmslier/">
    <meta name="twitter:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants">
    
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="title">
					<p id="logo"><span data-icon="&#xe04e;"></span></p>
					<h1>La Machine à Films</h1>
				</div>
			</div>
		</div>
	</header>
	
	<main >
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "films";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (nom, prenom, mail, mdp) 
    VALUES (:nom, :prenom, :mail, :mdp)");
	
	$stmt->bindParam(':nom', $_POST["nom"]);
    $stmt->bindParam(':prenom', $_POST["prenom"]);
    $stmt->bindParam(':mail', $_POST["mail"]);
    $stmt->bindParam(':mdp', $_POST["mdp"]);
	
		
   
		if ((strlen($_POST['nom']) <2)){
			header( "Refresh:3; url=http://localhost:8090/machineafilmspagination/inscription", true, 303);
			echo "<div class='propos'><p class='center-align'>Votre nom n'est pas assez long.</p></div>";
		} 

		elseif ((strlen($_POST['nom']) <2)){
			header( "Refresh:3; url=http://localhost:8090/machineafilmspagination/inscription", true, 303);
			echo "<div class='propos'><p class='center-align'>Votre prénom n'est pas assez long.</p></div>";
		} 

		elseif (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL))){
			header( "Refresh:3; url=http://localhost:8090/machineafilmspagination/inscription", true, 303);
			echo "<div class='propos'><p class='center-align'>Le format de votre e-mail n'est pas bon.</p></div>";
		}

		elseif ((strlen($_POST['mdp']) < 6)){
			header( "Refresh:3; url=http://localhost:8090/machineafilmspagination/inscription", true, 303);
			echo "<div class='propos'><p class='center-align'>Votre mot de passe n'est pas assez long.</p></div>";
		}
	
	elseif ((($_POST['mdpconf']) !== ($_POST['mdp']))){
			header( "Refresh:3; url=http://localhost:8090/machineafilmspagination/inscription", true, 303);
			echo "<div class='propos'><p class='center-align'>Vos mots de passe ne sont pas identiques.</p></div>";
		}

		else {
			echo "<div class='propos'><p class='center-align'>Merci pour votre contribution!</p></div>";
			$stmt->execute();
			header( "Refresh:3; url=http://localhost:8090/machineafilmspagination/", true, 303);
		}

    }

catch (Exception $e){
    echo $e->getMessage();
}


?>



<footer>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="footer">
					<p>Réalisation : Sandrine - Antoine - Yohann</p>	
				</div>
			</div>
		</div>
</footer>
	</main>
	<script type="text/javascript" src="../views/js/materialize.js"></script>
	<script type="text/javascript" src="../views/js/jquery.min.js"></script>
	

</body>
</html>