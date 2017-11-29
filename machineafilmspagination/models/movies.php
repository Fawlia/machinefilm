<?php



// connexion au serveur


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

  $stmt = $pdo->prepare("SELECT genres.genre, films.id FROM l_film_genre 
INNER JOIN genres ON genres.id = l_film_genre.id_genres 
INNER JOIN films ON films.id = l_film_genre.id_film");
  $stmt->execute();
	
  $resultGenre = $stmt->fetchAll();
	
  foreach($resultGenre as $occurence => $id){
	  return $resultGenre;
  }
	
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