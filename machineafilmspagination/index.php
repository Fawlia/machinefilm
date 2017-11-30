<?php

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', rtrim($uri, '/'));


if ($parts[1] == "machineafilmspagination") {
	
		switch ($parts[2]) {

			case "" :
				header('Location: http://localhost/machineafilmspagination/accueil');
				break;

			case "accueil" :

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/accueil.php";
				include_once "views/footer.php";
				break;

				case "connexion" :

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/connexion.php";
				include_once "views/footer.php";
				break;

				case "deconnexion" :

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/deconnexion.php";
				include_once "views/footer.php";
				break;

			case "formview" :

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/viewform.php";
				include_once "views/footer.php";
				break;

				case "inscriptionok" :

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/connectsuccess.php";
				include_once "views/footer.php";
				break;

			case "inscription" :

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/connectform.php";
				include_once "views/footer.php";
				break;

			case "films" :

				if (!isset($parts[3])){
					header('Location: http://localhost/machineafilmspagination/films/1');
				}

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/films.php";
				include_once "views/footer.php";
				break;

			case "film" :

				if(isset($parts[3])){

					if(is_numeric($parts[3])){

						$id = $parts[3];

						include_once "db_config.php";
						include_once "models/movies.php";

						$film = getMovieById($pdo, $id);
						$genre = getGenre($pdo, $id);
						$user = getUserPost($pdo, $id);

						include_once "views/header.php";
						include_once "views/film.php";

						include_once "views/footer.php";
						break;

					}


					else{

						include_once "views/header.php";
						include_once "views/404.php";
						include_once "views/footer.php";
						break;
					  }
					 }


			case "filmok" :

				include_once "db_config.php";
				include_once "./models/movies.php";

				include_once "views/header.php";
				include_once "views/filmsuccess.php";
				include_once "views/footer.php";
				break;
				
			default :
					include_once "views/header.php";
					include_once "views/404.php";
					include_once "views/footer.php";

				}
		}



	



?>