<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="coop.css" media="screen"/>
<title>service</title>
</head>
<body>

	<p> service Informatique</p>
	<?php
	//On créer des sessions et pour que ça fonctionne, il faut en déclarer l'ouverture.
	session_start();
	//destruction de la session
	if(isset($_GET['dec']) && $_GET['dec']=="close"){
			unset($_SESSION['pseudo']);
			unset($_SESSION['password']);
	}

	?>

	<body>

	<div class="login">
		<div class="login-apparence">
			<div class="titre">
				<h1>Authentification</h1>
			</div>

			<div class="login-form">
				<form method="POST" action="index.php">
				<div class="champ">
				<input class="champ_pseudo" type="text" value="<?php if (!empty($_POST["login"]))
						{ echo stripcslashes(htmlspecialchars($_POST["login"],ENT_QUOTES)); } ?>" placeholder="Pseudo" name="login">
				<label for="login"></label>
				</div>

				<div class="champ">
				<input class="champ_pass" type="password" value="<?php if (!empty($_POST["password"]))
						{ echo stripcslashes(htmlspecialchars($_POST["password"],ENT_QUOTES)); } ?>" placeholder="Mot de passe" name="password">
				<label for="password"></label>
				</div>
				<br>
				<input class="button_tel button_envoyer" type="submit" name="Envoyer" value="Connexion" />
				<br>
				<br>
					<a class="button_tel button_effacer button_lien" href="formulaire_client.php">Créer un compte</a>
			</div>
		</div>
	<!-- message si le javascript tourne pas -->
	<?php include("select.php"); ?>

	</div>
	<!-- fin -->
	 </body>
	</html>
