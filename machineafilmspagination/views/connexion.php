<div class="container" id="3choix">
		<div class="row">
			<div class="col s12 m12 l12 xl12 choix">
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Connexion</h2>
				
				<form method="POST" action="http://localhost/machineafilmspagination/connexionOK">
					<!-- AFIN D'EVITER UN DOUBLON DE PSEUDO, ON SE CONNECTE AVEC LE MAIL -->
					<div class="form-group">
						<input type="email" name="mailconnect" placeholder="Mail" />
					</div>
					
					<div class="form-group">
					<input type="password" name="mdpconnect" placeholder="Mot de passe" />
					</div>
			
					<button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Se connecter</button>
				</form>
				
				<a href="http://localhost/machineafilmspagination/inscription"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">S'inscrire</button></a>
				
				<a href="http://localhost/machineafilmspagination"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Retour à l'accueil</button></a>
			</div>
		</div>
</div>

