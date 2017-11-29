
			
			
		
	<div class="container">
	<div class="row">
		<form id="myform" action="http://localhost:8090/machineafilmspagination/views/connectprocess.php" method="POST">
		
			<div class="col s12 m12 l12 xl12 ">
				<p class="propos">Inscription à machineafilm.com<p>
				<p id="marg">Saisissez le titre de votre film, l'année de sa sortie, le nom du ou des réalisateurs et écrivez un bref résumé du film tout en évitant de spoiler les lecteurs </p>
			</div>
			
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="nom">Nom :</label>
				<input type="text" name="nom" id="nom" />
			</div>
			
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" name="prenom" id="prenom" />
			</div>
			
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="mail">Mail :</label>
				<input type="text" name="mail" id="mail" />
			</div>
			
			<div class="col s6 m6 l6 xl6 form-group">
				<label for="mdp">Mot de Passe :</label>
				<input type="text" name="mdp" id="mdp" />
			</div>
			
			<div class="col s6 m6 l6 xl6 form-group">
				<label for="mdpconf">Confirmation du mot de passe :</label>
				<input type="text" name="mdpconf" id="mdpconf" />
			</div>
			
			<div class="col s12 m12 l12 xl12 form-group"> 
				<button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Soumettre</button>
			</div>
		</form>
		<div class="col s12 m12 l12 xl12 form-group"> 
				<a href="http://localhost:8090/machineafilmspagination/accueil"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Retour à l'accueil</button></a>
			</div>
	</div>
</div>
