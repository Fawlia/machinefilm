<div class="container">
	<div class="row">
		<form id="myform" action="http://localhost/machineafilmspagination/views/formprocess.php" method="POST">
			<div class="col s12 m12 l12 xl12 ">
				<p class="propos">Proposez votre film!<p>
				<p id="marg">Saisissez le titre de votre film, l'année de sa sortie, le nom du ou des réalisateurs et écrivez un bref résumé du film tout en évitant de spoiler les lecteurs </p>
			</div>
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="titre">Titre :</label>
				<input type="text" name="titre" id="titre" />
			</div>
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="annee">Année :</label>
				<input type="number" name="annee" id="annee" />
			</div>
			<div class="col s6 m6 l4 xl4 form-group">
				<label for="realisateur">Réalisateur :</label>
				<input type="text" name="realisateur" id="realisateur" />
			</div>
			<div class="col s12 m12 l12 xl12 form-group">
				<label for="description">Description :</label>
				<textarea name="description" id="description"></textarea>
			</div>
			<!--<select>
				<label for="genre">Genre:</label>
				<option id="Romance">Romance</option>
				<option id="Action">Action</option>
				<option id="Kung-Fu">Kung-Fu</option>
				<option id="Comédie">Comédie</option>
				<option id="Drame">Drame</option>
				<option id="Fantastique">Fantastique</option>
				<option id="Aventure">Aventure</option>
				<option id="Science-Fiction">Science-Fiction</option>
				<option id="Policier">Policier</option>
				<option id="Thriller">Thriller</option>
				<option id="Road-Trip">Road-Trip</option>
				<option id="Feel-Good">Feel-Good</option>
				<option id="Animation">Animation</option>
				<option id="Historique">Historique</option>
			</select>-->
			<div class="col s12 m12 l12 xl12 form-group"> 
				<button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Soumettre</button>
			</div>
		</form>
		<div class="col s12 m12 l12 xl12 form-group"> 
				<a href="http://localhost/machineafilmspagination/accueil"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Retour à l'accueil</button></a>
			</div>
	</div>
</div>



