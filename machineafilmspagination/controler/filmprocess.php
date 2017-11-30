<?php



$error = [];
$_POST['annee'] = intval($_POST['annee']);

if (isset($_POST["titre"])){

	if(empty($_POST["titre"]))
		{$error['titre'] = "empty";}

	if (strlen($_POST["titre"]) < 2 )
		{$error['titre'] = "short";}
}

if (isset($_POST["annee"])){

	if(empty($_POST["annee"]))
		{$error['annee'] = "empty";}

	if ((strlen($_POST['annee']) >4) || (strlen($_POST['annee']) <4) ||((($_POST)['annee']) >2019) || ((($_POST)['annee']) <1900))
		{$error['annee'] = "short";}
}

if (isset($_POST["realisateur"])){

	if(empty($_POST["realisateur"]))
		{$error["realisateur"] = "empty";}

	 if (strlen($_POST["realisateur"]) < 2 || strlen($_POST["realisateur"]) > 50 )
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
		$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		// set the PDO error mode to exception
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// prepare sql and bind parameters
		$stmt = $con->prepare("INSERT INTO films (titre, annee, realisateur, description) 
		VALUES (:titre, :annee, :realisateur, :description)");

		$stmt->bindParam(':titre', $_POST["titre"]);
		$stmt->bindParam(':annee', $_POST["annee"]);
		$stmt->bindParam(':realisateur', $_POST["realisateur"]);
		$stmt->bindParam(':description', $_POST["description"]);
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