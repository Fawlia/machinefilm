<div class="container">
	<div class="row">    
			<?php
		
		$perPage = 6;

$req = $pdo->query('SELECT COUNT(*) AS total FROM films');
$result = $req->fetch();
$total = $result['total'];


$nbPage = ceil($total/$perPage);

// POUR SAVOIR SUR QUEL PAGE ON SE TROUVE

if(isset($parts[3]) && !empty($parts[3]) && ctype_digit($parts[3]) == 1){  
	$page = intval($parts[3]);
	// ON VA VERIFIER QUE N'EST PAS SUPERIEUR AUX PAGE EXISTANTS ET SI ELLE EST SUPERIEUR ON REDIRIGE VERS LA DERNIERE PAGE
	if($page > $nbPage){
		$current = $nbPage;
	}else{
		$current = $page;
	} 

}else{
	$current = 1;
}

$firstOfPage = ($current-1)*$perPage;

$reqProducts = $pdo->prepare('SELECT * FROM films ORDER BY id ASC LIMIT '.$firstOfPage.', '.$perPage.'');
		
			$reqProducts->execute();
			$result = $reqProducts->fetchAll();
			
			
			
			foreach ($result as  $film){
			?>   
				<div class="center-align col s4 m4 l4 xl4" id="flexa">
					<p class="proposai"><?php echo $film['titre'] ?></p>
					<p class="proposal"><a href="<?php echo "http://localhost/machineafilmspagination/film/".$film['id']."/"; ?>">Détails</a></p>
				</div>
			<?php
			}
			?>

			<div id="tousLesFilms" class="right-align">
					<a href="http://localhost/machineafilmspagination"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Retour</button></a>	
			</div>	

<ul class="pagination center-align">

   <li class="<?php if($current=='1'){ echo 'disabled'; }?>"><a href="<?php if($current != '1'){ echo $current-1; }else{ echo $current; } ?>">&laquo;</a></li>


    <?php
    for($i=1; $i<=$nbPage; $i++){

        if($i == $current){
            ?>
                <li class="active"><a href="<?php echo $i; ?>"> <?php echo $i; ?></a></li>    
            <?php
        }else{
            ?>
                <li><a href="<?php echo $i; ?>"> <?php echo $i; ?></a></li> 
            <?php      
        }

    }    
    ?>

<li class="<?php if($current==$nbPage){ echo 'disabled'; }?>"><a href="<?php if($current != $nbPage){ echo $current+1; }else{ echo $current; } ?>">&raquo;</a></li>

</ul>
	</div>
	</div>

