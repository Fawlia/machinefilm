<?php

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));

var_dump($parts);



switch ($parts[2]) {
		
	case "" :
		header('Location: http://localhost:8090/machineafilmspagination/accueil');
		break;
		
	case "accueil" :
		include_once "views/header.php";
		echo "accueil";
		include_once "views/accueil.php";
		include_once "views/footer.php";
		break;
		
	case "formview" :
		include_once "views/header.php";
		include_once "views/viewform.php";
		include_once "views/footer.php";
		break;
}














































/*



$url = ''; // ON CREE UNE VARIABLE URL QUI EST = A RIEN POUR L'INSTANT


if(isset($_GET['url'])) {
   
   ON CREE UN ARRAY AVEC L'URL
   array (size=2)
   0 => string 'accueil' (length=7)
   1 => string '3' (length=1)

   $url = explode('/',$_GET['url']);//TOUT EST BIEN SEPARER
}



//ON A REMPLACER index.php en ce qu'on veut avec .htacces DONC PLUS BESOIN DE METTRE DANS L'URL index.php

//traiter l'url QUI NOUS A ETE ENVOYE, PASSER EN PARAMETRE
require 'models/connect.php';
require 'models/model.php';

// NOS CONDITIONS ADIN D'AFFICHER DU CONTENU EN FONCTION DE CE QUI EST PASSER DANS L'URL

// 1) Si l'url est vide qu'on est dans le dossier racine (array est vide EMPTY)
if ($url == '') {
	require 'accueil.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}elseif ($url[0] == 'home' && !empty($url[1]) && $url[1] == 'description' && !empty($url[2])){
	
	$uri = $_SERVER['REQUEST_URI'];
	$parts = explode('/', rtrim($uri, '/'));
	$bdd = new PDO('mysql:host=localhost;dbname=films;charset=utf8', 'root', '');
	$film = $bdd->query('select * from films order by id ');
	
	détails($parts, $film);
}
elseif ($url[0] == 'home' && !empty($url[1])) {// ATTENTION pas POSSIBLE DE LA NOMMER ACCUEIL
	require 'disponibiliter.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}elseif ($url[0] == 'home' ) {// ATTENTION pas POSSIBLE DE LA NOMMER ACCUEIL
	require 'selection.php'; // ON DIRIGE VERS LA PAGE QU'ON VEUT !!!
}
else{
	require '404.php';
}



*/


?>