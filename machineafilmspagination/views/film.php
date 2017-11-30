
<!--
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
	-->



<div id='3choix' class='container'>
	<div class='row choix'>
	
		<div class='col s12 m3 l3 xl3 offset-l1 affiche'>
			<img src="http://localhost/machineafilmspagination/views/img/<?php echo $film['id'] ?>.jpg"  alt="">
		</div>
		
		<div class='col s12 m6 l6 xl6 '>
			<p class="proposai"><?php echo $film['titre'] ?></p>
			<p class="realisateur">Réalisateur :<?php echo $film['realisateur'] ?></p>
			<p class="realisateur">Date de sortie :<?php echo $film['annee'] ?></p>
			<p><?php echo $film['description'] ?></p>
			
			<div class="row">
				<div class='col s12 m12 l12 xl12'>
				<a href='http://localhost/machineafilmspagination/films' class='btn btn-warning'>Retour</a>
				</div>
			</div>
			
		</div>
		
	</div>
</div>

	
	





