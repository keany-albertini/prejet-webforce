<?php 
	session_start(); 
	$title = "home";
?>

<!DOCTYPE html>
<html lang="fr">
	<?php require_once("templates/head.php") ?>
	<body class="body-accueil">
		<?php require_once("templates/header.php") ?>
		<main>
            		<img class="image-fond" src="ressources/image1.png" alt="">
		</main>
		<?php require_once('templates/footer.php'); ?>
		<script src="script/burger-script.js"></script>
	</body>
</html>
