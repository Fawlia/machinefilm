<?php
   // ICI NOUS METTONS LES DIFFERENTES FONCTIONS // ACTION 
   // L'AFFICHAGE SOUHAITE
$servername = "localhost";
$username = "root";
$password = "";

try {
$pdo = new PDO("mysql:host=$servername;dbname=films", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// set the PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
/*echo "CONNECTER";*/
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}


/*################################################*/
/*####   PAGINATION DE TOUS LES FILMS   ###########*/
/*################################################*/

// DIVISION DU NB DE FILM PAR PAGE SUPERIEUR (pas de page à virgule)
$perPage = 6;

$req = $pdo->query('SELECT COUNT(*) AS total FROM films');
$result = $req->fetch();
$total = $result['total'];


$nbPage = ceil($total/$perPage);

// POUR SAVOIR SUR QUEL PAGE ON SE TROUVE

if(isset($url[1]) && !empty($url[1]) && ctype_digit($url[1]) == 1){  
	$page = intval($url[1]);
	// ON VA VERIFIER QUE N'EST PAS SUPERIEUR AUX PAGE EXISTANTS ET SI ELLE EST SUPERIEUR ON REDIRIGE VERS LA DERNIERE PAGE
	if($page > $nbPage){
		$current = $nbPage;
	}else{
		$current = $page;
	} 

}else{
	$current = 1;
}

$firstOfPage = ($current-1)*$perPage;

$reqProducts = $pdo->prepare('SELECT * FROM films ORDER BY id ASC LIMIT '.$firstOfPage.', '.$perPage.'');











