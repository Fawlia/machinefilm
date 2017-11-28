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


catch(PDOException $e)
{
	/*$bdd->rollback();*/
    echo 'Echec de la connexion à la base de données';

    exit();
}
}

function détails($parts, $film){
	
	$bdd = new PDO('mysql:host=localhost;dbname=films;charset=utf8', 'root', '');
	$film = $bdd->query('select * from films order by id ');
	
	$uri = $_SERVER['REQUEST_URI'];



		$parts = explode('/', rtrim($uri, '/'));
	

if (isset($parts[4])) {

	if (is_numeric($parts[4])){
		foreach ($film as $film_table) {
			# code...
			if ($parts[4] == $film_table[0])
			{
			echo '<p class="proposa">'.$film_table[1].'</p><p>'.$film_table[2].'</p><p>'.$film_table[3].'</p><p>'.$film_table[4].'</p>';
			echo '<a href="javascript:history.go(-1)">Retour</a>';

			include_once('model.php');
			}
		}
		
	}
	else { echo"ce films n'existe pas";}


}else{
	foreach ($films as $films): ?>
    <article>

        <h2><?php echo $films['titre'] ?></h2>
        
        <a href="<?php echo "/movies/index.php/film/".$films["id"]; ?>">Détails</a>
    
          
    </article>
    <?php endforeach;
	# code...

}
}



?>