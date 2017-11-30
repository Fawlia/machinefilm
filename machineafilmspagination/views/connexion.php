<?php
session_start(); // POUR UTILISER LES SESSIONS CREER





if(isset($_POST['formconnexion']))// SI CETTE VARIABLE EXISTE , ON PEUT CONTINUER
 {
   $mailconnect = ($_POST['mailconnect']);
   $mdpconnect = ($_POST['mdpconnect']);

// IL FAUT CONTINUER LES CONDITIONS AVEC SI IL MANQUE 1 CHAMPS
   if(!empty($mailconnect) AND !empty($mdpconnect)) 
   {
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
         header("Location:accueil/?id=".$_SESSION['id']);// Pour rediriger vers le profil de la personne

      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

include_once "header.php";

?>

<div class="container" id="3choix">
		<div class="row">
			<div class="col s12 m12 l12 xl12 choix">
				<h2><p class="logo1"><span data-icon="&#x45;"></span></p>Connexion</h2>
				
				<form method="POST" action="">
					<!-- AFIN D'EVITER UN DOUBLON DE PSEUDO, ON SE CONNECTE AVEC LE MAIL -->
					<input type="email" name="mailconnect" placeholder="Mail" />
					<input type="password" name="mdpconnect" placeholder="Mot de passe" />
					<br /><br />
					<button class="btn waves-effect waves-light" type="submit" name="formconnexion" value="send">Se connecter</button>
				</form>
				
				<a href="http://localhost/machineafilmspagination/inscription"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">S'inscrire</button></a>
				
				<a href="http://localhost/machineafilmspagination"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Retour à l'accueil</button></a>
			</div>
		</div>
</div>
<?php
      include_once "footer.php";
?>