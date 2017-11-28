<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>La machine à Films</title>
	<link type="text/css" rel="stylesheet" href="../views/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" href="../views/css/style1.css">
	
	
	<meta property="og:title" content="Machine à Film"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://localhost:8090/machineafilmslier/"/>
    <meta property="og:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants"/>
    <meta property="og:site_name" content="La machine à Films"/>
    
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="Machine à Film">
    <meta name="twitter:url" content="http://localhost:8090/machineafilmslier/">
    <meta name="twitter:description" content="La machine à film vous permet de visualiser les infos d'un film parmi l'ensemble des films existants">
    
</head>


<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="title">
					<a href="http://localhost:8090/machineafilmspagination"><p id="logo"><span data-icon="&#xe04e;"></span></p></a>
					<a href="http://localhost:8090/machineafilmspagination"><h1>La Machine à Films</h1></a>
				</div>
			</div>
		</div>
	</header>
	<main>
	
	
	<!--SELECT genres.genre, films.titre FROM l_film_genre INNER JOIN genres ON genres.id = l_film_genre.id_genres INNER JOIN films ON films.id = l_film_genre.id_film ;-->
			
	
	<div class="container">
		<div class="row">    
			<?php
			$reqProducts->execute();
			$result = $reqProducts->fetchAll();
			
			
			
			foreach ($result as  $film){
			?>   
				<div class="center-align col s4 m4 l4 xl4" id="flexa">
					<p class="proposai"><?php echo $film['titre'] ?></p>
					<p class="proposal"><a href="<?php echo "/machineafilmspagination/home/description/".$film['id']."/"; ?>">Détails</a></p>
				</div>
			<?php
			}
			?>

			<div id="tousLesFilms" class="right-align">
					<a href="./"><button class="btn waves-effect waves-light" type="submit" name="submit" value="send">Retour</button></a>	
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


</main>	

<footer>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12 xl12" id="footer">
					<p>Réalisation : Sandrine - Antoine - Yohann</p>	
				</div>
			</div>
		</div>
</footer>
	
	<script type="text/javascript" src="views/js/materialize.js"></script>
	<script type="text/javascript" src="views/js/jquery.min.js"></script>
	

</body>
</html>