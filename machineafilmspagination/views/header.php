<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>La machine à Films</title>
	<link type="text/css" rel="stylesheet" href="http://localhost/machineafilmspagination/views/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="http://localhost/machineafilmspagination/views/css/style1.css">
	<link rel="stylesheet" href="http://localhost/machineafilmspagination/views/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
	
	<meta property="og:title" content="Machine à Film"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://localhost/machineafilmslier/"/>
    <meta property="og:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants"/>
    <meta property="og:site_name" content="La machine à Films"/>
    
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Machine à Film">
    <meta name="twitter:url" content="http://localhost/machineafilmslier/">
    <meta name="twitter:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants">
    
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="title">
					<a href="http://localhost/machineafilmspagination/accueil"><p id="logo"><span data-icon="&#xe04e;"></span></p></a>
					<a href="http://localhost/machineafilmspagination/accueil"><h1>La Machine à Films</h1></a>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<nav id="navigation">
				<div class="container">
					<div class="row">
						<div class="col s12 m12 l12 xl12">
							<div class="nav-wrapper">

								<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>

								<ul id="nav-mobile" class="left hide-on-med-and-down">

									<li><a href="http://localhost/machineafilmspagination/accueil"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
									<li><a href="http://localhost/machineafilmspagination/formview"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</a></li>
									<li><a href="http://localhost/machineafilmspagination/films">  <i class="fa fa-video-camera" aria-hidden="true"></i> Films</a></li>
									
									<li><a href="">About</a></li>
									
									
									<?php if ((isset($info_user)) && ($info_user = $res)){ ?>
									<li><a href="http://localhost/machineafilmspagination/deconnexion"><i class="fa fa-key" aria-hidden="true"></i> deconnexion</a></li>
									<?php }else{ ?>
									<li><a href="http://localhost/machineafilmspagination/inscription"><i class="fa fa-pencil" aria-hidden="true"></i> Inscription <!-- <span class="new badge">4</span> --></a></li>
									<li><a href="http://localhost/machineafilmspagination/connexion"><i class="fa fa-key" aria-hidden="true"></i> Connexion</a></li>
									<?php }?>
																		

								</ul>


								<ul class="side-nav" id="mobile-demo">

									<li><a href="http://localhost/machineafilmspagination/accueil"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
									<li><a href="http://localhost/machineafilmspagination/formview"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</a></li>
									<li><a href="http://localhost/machineafilmspagination/films">  <i class="fa fa-video-camera" aria-hidden="true"></i> Films</a></li>
									<li><a href="http://localhost/machineafilmspagination/inscription"><i class="fa fa-pencil" aria-hidden="true"></i> Inscription <!-- <span class="new badge">4</span> --></a></li>
									<li><a href="">About</a></li>
									<li><a href=""><i class="fa fa-key" aria-hidden="true"></i> Connexion</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	
	<main>