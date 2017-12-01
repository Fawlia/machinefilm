<?php

function connect($pdo, $mail, $mdp){
	
	$info = [];
	
	$stmt = $pdo->prepare("select mdp from users where mail = '".$mail."'");
	$stmt->execute();
	$resultmdp = $stmt->fetch();
	
	$postmdp = $resultmdp["mdp"];
	
	if($postmdp != $mdp) {
		$info['state'] = false;
	}
	else {
		$info['state'] = true;
		$stmt2 = $pdo->prepare("select * from users where mail = '".$mail."'");
	$stmt2->execute();
	$info['info_user'] = $stmt2->fetch();
	
		var_dump($info['info_user']);
		echo "COUCOU                        ";
	}
	
	$info = setSession($info);
	
	return $info;
	
}

function setSession($info){
	if ($info['state'] == false ){
		
	 	$info['state'] = false ;
		return $info;
		
	}
	
	else {
	
		$_SESSION['info_user'] = $info['info_user'];
		$info['state'] = true ;
		$info['info'] = $info['info_user'];
		var_dump($_SESSION['info_user']);
		return $info;
		
	}
	
}

function checkSession(){
	if(isset($_SESSION['info_user'])){
		return $_SESSION['info_user'];
	}
	else{
		return false;
	}
}





?>