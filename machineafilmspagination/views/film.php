<?php

foreach($genre as $g){
	if ($film['id'] == $g['id']){
		echo $g['genre'];
	}
}

foreach($user as $u){
	if ($film['id'] == $u['id']){
		echo $u['prenom'];
		
	}
}
	

echo "<div id='3choix' class='container'>";
echo "<div class='row'>";
echo "<div class='col s12 m12 l12 xl12 choix'>";
echo "<p class='proposai'>".$film['titre']."</p>";
echo "<p class='proposal'>Année de sortie :".$film['annee']."</p>";
echo "<p><span class='proposal'>Description :</span><br/>".$film['description']."</p>";
echo "<p><span class='proposal'>Genre(s) :</span><br/>".$g['genre']."</p>";
echo '</div>';
echo "<a href='http://localhost/machineafilmspagination/films' class='btn btn-warning'>Retour</a>";
echo '</div>';
echo '</div>';


	
	





?>