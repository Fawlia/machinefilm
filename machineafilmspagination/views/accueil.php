<div class="container" id="3choix">
		<div class="row">
			<div class="col s12 m12 l5 xl5 choix">
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Choix du film</h2>
				<p>Vous souhaitez trouver toutes les informations concernant un film précis?  Cliquez-ici pour choisir le film qui vous intéresse dans la longue liste des films existants.</p>
				<a href="http://localhost/machineafilmspagination/films"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Accéder à la liste des films</button></a>
			</div>
			<?php if ((isset($info_user)) && ($info_user = $res)){ ?>
			<div class="col s12 m12 l5 xl5 choix" >
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Ajouter un film</h2>
				<p>Vous souhaitez enrichir la base de données du site? Rien de plus simple, n'hésitez pas à proposer vos films favoris!Il vous suffit pour cela, de remplir notre formulaire!</p>
				<a href="http://localhost/machineafilmspagination/formview"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Soumettre mon film</button></a>
			</div>
			<?php }?>
			
			
			
			
			
	</div>
</div>


