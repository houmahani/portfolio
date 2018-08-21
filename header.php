<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Houmahani Kane - <?php echo $pageTitle; ?></title>
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
	
	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	
	<!-- jQuery -->
	<script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous">
	</script>
	
	<!-- Feuille de style -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div id="header">
		<div id="white_frame">
			<div id="top" class="frame">
			  <a href="index.php"><p class="nav to_frontpage"></p></a>
			</div>
			<div id="right" class="frame">
				<p>(c) Site réalisé par Houmahani Kane - 2018</p>
			</div>
			
			<div id="left" class="frame">
					<ul id="social">
						<li><a href="#"><i class="fab fa-github" title="Retrouvez-moi sur Git"></i></a></li>
						<li><a href="linkedin.com/in/houmahanikane"><i class="fab fa-linkedin-in" title="Retrouvez-moi sur Linkedin"></i></a></li>
						<li><a href="mailto:houmahanikane@gmail.com"><i class="fas fa-at" title="N'hésitez pas à me contacter"></i></a></li>
						<li><a href="#"><i class="fas fa-file-pdf" title="Télécharger mon CV"></i></a></li>
					</ul>
			</div>
			
			<div id="bottom" class="frame"></div>
		</div>
	</div>
 <?php 
    $newHeight = ($activePage == 'about' || $activePage == 'projects') ? 'new_height' : '';
  ?>
  
<div id="main" class="transition transition_fadein">
	<header id="main-header" class="<?= $newHeight; ?>">
		<div class="flex-header <?= $newHeight; ?>">
		  <?php if ($activePage == 'about' || $activePage == 'projects'): ?>
			<h1><a href="./index.php"><?php echo($pageTitle); ?></a></h1>
			<?php else: ?>
			<h1><a href="./index.php">Houmahani Kane</a></h1>
		  <p>Développeuse intégratrice</p>
			<?php endif; ?>		

			<!--<nav id="nav">
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#">Projets</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>-->
			<button id="btn_resume"><a href="#">Télécharger mon CV</a></button>
		</div>
	
	<?php 
    $hide = ($activePage == 'about') ? 'hide' : '';
  ?>
	<a class="<?= $hide; ?>" href="./about.php">	
		<button id="btn_about" class="btn_side">
			<div class="arrows">
				<i class="arrow left"></i>
				<i class="arrow left"></i>
				<i class="arrow left"></i>
			</div>
			About
		</button>
	</a>
	
	<?php 
    $hide = ($activePage == 'projects') ? 'hide' : '';
  ?>
	<a class="<?= $hide; ?>" href="./projects.php">
		<button id="btn_projects" class="btn_side">
			<div class="arrows">
				<i class="arrow right"></i>
				<i class="arrow right"></i>
				<i class="arrow right"></i>
			</div>
			Projets
		</button>
	</a>
	</header> 
</div> 