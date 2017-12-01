<?php

function deco(){

	session_start();
	session_unset();
	session_destroy();
	header('Location: http://localhost/machineafilmspagination/accueil');
}

function insertFilm($pdo){
	

		$stmt = $pdo->prepare("INSERT INTO films (titre, annee, realisateur, description) 
		VALUES (:titre, :annee, :realisateur, :description)");

		$stmt->bindParam(':titre', $_POST["titre"]);
		$stmt->bindParam(':annee', $_POST["annee"]);
		$stmt->bindParam(':realisateur', $_POST["realisateur"]);
		$stmt->bindParam(':description', $_POST["description"]);
		$result = $stmt->execute();
	
		return $result;
}


function connexion(){
	
	var_dump($_POST['formconnexion']);

	if(isset($_POST['formconnexion'])){
		$mailconnect = ($_POST['mailconnect']);
		$mdpconnect = ($_POST['mdpconnect']);

		// IL FAUT CONTINUER LES CONDITIONS AVEC SI IL MANQUE 1 CHAMPS
		if(!empty($mailconnect) AND !empty($mdpconnect)){
			$requser = $pdo->prepare("SELECT * FROM users WHERE mail = ? AND mdp = ?");
			$requser->execute(array($mailconnect, $mdpconnect));

			// VERIFIE SI USER EXISTE DANS LA BDD
			// pas de vérif à ce niveau puisque si user n'existe pas pas ce souci à vérifier dans l'inscription
			$userexist = $requser->rowCount();
			
			if($userexist == 1) {
				$userinfo = $requser->fetch(); // nous recevons les informations avec fetch donc on les mets dans des variables de sessions
				$_SESSION['id'] = $userinfo['id']; 
				$_SESSION['nom'] = $userinfo['nom'];
				$_SESSION['mail'] = $userinfo['mail'];
				header("Location: http://localhost/machineafilmspagination/accueil/?id=".$_SESSION['id']);// Pour rediriger vers le profil de la personne

			} else {
			$erreur = "Mauvais mail ou mot de passe !";
			}
		} else {
		$erreur = "Tous les champs doivent être complétés !";
		}
	}
}


function getFilms() {   
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=films;charset=utf8', 'root', '');
		$bdd->beginTransaction();
		$films = $bdd->query('select * from films order by id ');
		
		return $films;
		$bdd->commit();
	}

	catch(PDOException $e) {
		
		echo 'Echec de la connexion à la base de données';
		exit();
	}
}

function getMovieById($pdo, $id){

  $stmt = $pdo->prepare("SELECT * FROM films WHERE id=$id");
  $stmt->execute();
  $result = $stmt->fetch();

  return $result;
	
}

function getGenre($pdo, $id){

 $stmt = $pdo->prepare("
SELECT genres.genre, films.id FROM l_film_genre 
INNER JOIN genres ON genres.id = l_film_genre.id_genres 
INNER JOIN films ON films.id = l_film_genre.id_film
");
  $stmt->execute();
	
  $resultGenre = $stmt->fetchAll();
	
	
	  return $resultGenre;
  }

function getUserPost($pdo, $id){

 $stmt = $pdo->prepare("
SELECT users.prenom, films.id FROM l_film_user 
INNER JOIN users ON users.id = l_film_user.id_user
INNER JOIN films ON films.id = l_film_user.id_film
");
  $stmt->execute();
	
  $resultUser = $stmt->fetchAll();
	
	
	
	  return $resultUser;
  }




function détails($parts, $film){
	
	$bdd = new PDO('mysql:host=localhost;dbname=films;charset=utf8', 'root', '');
	$film = $bdd->query('select * from films order by id ');
	
	
	

if (isset($parts[3])) {

	if (is_numeric($parts[3])){
		foreach ($film as $film_table) {
			# code...
			if ($parts[3] == $film_table[0])
			{
			echo '<p class="proposa">'.$film_table[1].'</p><p>'.$film_table[2].'</p><p>'.$film_table[3].'</p><p>'.$film_table[4].'</p>';
			echo '<a href="javascript:history.go(-1)">Retour</a>';

			include_once('model.php');
			}
		}
		
	}
	else { echo"ce films n'existe pas";}


}
}



?>