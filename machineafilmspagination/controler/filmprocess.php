<?php

$error = [];

if (isset($_POST["titre"])){

	if(empty($_POST["titre"]))
		{$error['titre'] = "empty";}

	if (strlen($_POST["nom"]) < 2 )
		{$error['titre'] = "short";}
}

if (isset($_POST["annee"])){

	if(empty($_POST["annee"]))
		{$error['annee'] = "empty";}

	if (strlen($_POST["annee"]) < 2 )
		{$error['annee'] = "short";}
}

if (isset($_POST["realisateur"])){

	if(empty($_POST["realisateur"]))
		{$error["realisateur"] = "empty";}

	 if (!(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)))
		{$error["realisateur"] = "false";}
}

if (isset($_POST["description"])){

	if(empty($_POST["description"]))
			{$error["description"] = "empty";}

	if (strlen($_POST["description"]) < 50 )
		{$error['description'] = "short";}
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
    $stmt = $conn->prepare("INSERT INTO films (nom, prenom, mail, mdp) 
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