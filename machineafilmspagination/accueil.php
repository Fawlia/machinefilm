<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>La machine à Films</title>
	<link type="text/css" rel="stylesheet" href="views/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="views/css/style1.css">
	
	
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
					<a href="index.php"><p id="logo"><span data-icon="&#xe04e;"></span></p></a>
					<a href="index.php"><h1>La Machine à Films</h1></a>
				</div>
			</div>
		</div>
	</header>
	
	<main >
	
	
	<div class="container" id="3choix">
		<div class="row">
			<div class="col s12 m12 l5 xl5 choix">
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Choix du film</h2>
				<p>Vous souhaitez trouver toutes les informations concernant un film précis?  Cliquez-ici pour choisir le film qui vous intéresse dans la longue liste des films existants.</p>
				<a href="home/"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Accéder à la liste des films</button></a>
			</div>
			
			<div class="col s12 m12 l5 xl5 choix" >
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Ajouter un film</h2>
				<p>Vous souhaitez enrichir la base de données du site? Rien de plus simple, n'hésitez pas à proposer vos films favoris!Il vous suffit pour cela, de remplir notre formulaire!</p>
				<a href="views/viewform.php"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Soumettre mon film</button></a>
			</div>
	</div>
</div>
	


</main>	

<footer>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="footer">
					<p>Réalisation : Sandrine - Antoine - Yohann</p>	
				</div>
			</div>
		</div>
</footer>
	
	<script type="text/javascript" src="views/js/materialize.js"></script>
	<script type="text/javascript" src="views/js/jquery.min.js"></script>
	

</body>
</html>