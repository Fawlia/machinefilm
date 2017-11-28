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
					<a href="http://localhost:8090/machineafilmspagination"><p id="logo"><span data-icon="&#xe04e;"></span></p></a>
					<a href="http://localhost:8090/machineafilmspagination"><h1>La Machine à Films</h1></a>
				</div>
			</div>
		</div>
	</header>
	
	<main>
	<!-- AVEC DESIGN au choix -->
	<div class="container" id="3choix">
		<div class="row">
			<div class="col s12 m12 l12 xl12 choix">
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Bienvenue</h2>
				<p>Vous allez voir l'ensemble des films à votre disposition. Utilisez la pagination pour vous promener parmi notre base de donnée.</p><p> Cliquez sur "détail" pour avoir accès à toutes les informations concernant le film choisi.</p>
				<a href="1"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Accéder à la liste des films</button></a>
			</div>
			
			<div class="col s12 m12 l12 xl12 form-group"> 
				<a href="http://localhost:8090/machineafilmspagination"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Retour à l'accueil</button></a>
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