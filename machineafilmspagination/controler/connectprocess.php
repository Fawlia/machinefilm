<?php

$error = [];

if (isset($_POST["nom"])){

	if(empty($_POST["nom"]))
		{$error['nom'] = "empty";}

	if (strlen($_POST["nom"]) < 2 )
		{$error['nom'] = "short";}
}

if (isset($_POST["prenom"])){

	if(empty($_POST["prenom"]))
		{$error['prenom'] = "empty";}

	if (strlen($_POST["prenom"]) < 2 )
		{$error['prenom'] = "short";}
}

if (isset($_POST["mail"])){

	if(empty($_POST["mail"]))
		{$error["mail"] = "empty";}

	 if (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)))
		{$error["mail"] = "false";}
}

if (isset($_POST["mdp"])){

	if(empty($_POST["mdp"]))
			{$error["mdp"] = "empty";}

	if (strlen($_POST["mdp"]) < 6 )
		{$error['mdp'] = "short";}
	}

if (isset($_POST["mdpconf"])){

	if(empty($_POST["mdpconf"]))
			{$error["mdpconf"] = "empty";}

	if (($_POST["mdpconf"]) !== ($_POST["mdp"]) )
		{$error['mdp'] = "notsame";}
	}


		
echo json_encode($error);

    


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "films";

if (empty($error)){
   
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (nom, prenom, mail, mdp) 
    VALUES (:nom, :prenom, :mail, :mdp)");
	
	$stmt->bindParam(':nom', $_POST["nom"]);
    $stmt->bindParam(':prenom', $_POST["prenom"]);
    $stmt->bindParam(':mail', $_POST["mail"]);
    $stmt->bindParam(':mdp', $_POST["mdp"]);
	$stmt->execute();
	

}
catch (Exception $e){
    echo $e->getMessage();
	}
$conn = null;
}


else {
	$test = "Tout va bien";
}

?>