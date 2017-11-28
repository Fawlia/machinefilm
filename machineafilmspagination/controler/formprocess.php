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

$_POST['annee'] = intval($_POST['annee']);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO films (titre, annee, realisateur, description) 
    VALUES (:titre, :annee, :realisateur, :description)");
	
	$stmt->bindParam(':titre', $_POST["titre"]);
    $stmt->bindParam(':annee', $_POST["annee"]);
    $stmt->bindParam(':realisateur', $_POST["realisateur"]);
    $stmt->bindParam(':description', $_POST["description"]);
	
		
   
		if ((strlen($_POST['description']) <50)){
			header( "Refresh:3; url=../views/viewform.php", true, 303);
			echo "<div class='propos'><p class='center-align'>La description n'est pas assez longue</p></div>";
		} 

		elseif ((strlen($_POST['annee']) >4) || (strlen($_POST['annee']) <4) ||((($_POST)['annee']) >2018) || ((($_POST)['annee']) <1900)) {
			header( "Refresh:3; url=../views/viewform.php", true, 303);
			echo "<div class='propos'><p class='center-align'>L'année n'est pas bonne</p></div>";
		}

		elseif ((strlen($_POST['realisateur']) >20) ||	(strlen($_POST['realisateur']) <3)){
			header( "Refresh:3; url=../views/viewform.php", true, 303);
			echo "<div class='propos'><p class='center-align'>Le nom du réalisateur n'est pas bon</p></div>";
		}

		elseif ((strlen($_POST['titre']) >20) || (strlen($_POST['titre']) < 3)){
			header( "Refresh:3; url=../views/viewform.php", true, 303);
			echo "<div class='propos'><p class='center-align'>Le titre du film n'est pas bon</p></div>";
		}

		else {
			echo "<div class='propos'><p class='center-align'>Merci pour votre contribution!</p></div>";
			$stmt->execute();
			header( "Refresh:3; url=../index.php", true, 303);
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