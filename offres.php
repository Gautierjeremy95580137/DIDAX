<?php
session_start();
//var_dump($_SESSION['pseudo']);

if (!$_SESSION['pseudo']){
        header('Location: index.php');
        exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="style/style.css" rel="Stylesheet" type="text/css" >
</head>
<body>
	<?php include "header.php" ?>

	<div class="offres">
		<h4 class="offrestitre"> Codeur PHP, CDI</h4>
		<hr>
		<p class="descrioffres"> Recherche un/e programmeur/se PHP pour administrer un site internet d'une petites entreprises. Secteur Paris 12, salaire en fonction de l'experience.
		<hr>
		<div>
		<button class="bpostul"><a href="test.php">Postuler</a></button> 
	</div>
	</div>
	<div class="offres">
		<h4 class="offrestitre"> Codeur PHP, Freelance</h4>
		<hr>
		<p class="descrioffres"> Recherche un/e programmeur/se php avancé pour notre jeune équipe de développpement. Secteur Paris 11, salaire: 2000€ brut/mois. Venez nous rejoindre !
		<hr>
		<div>
		<button class="bpostul"><a href="testphpinter.php">Postuler</a></button> 
	</div>
	</div>
</body>
</html>
