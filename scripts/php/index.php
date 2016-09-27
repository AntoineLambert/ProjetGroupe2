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
	<!-- affiche le cadre -->
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
	</div>
	<!-- fin -->


				<?php
				// vérification des données saisies par l'utilisateur
				if(isset($_POST['Envoyer'])){
						//si pseudo vide
						if(empty($_POST['login']))
						{
								echo '<div id="erreur">Veuillez saisir un pseudo!</div>';
						}
						//si mot de passe vide
						else if(empty($_POST['password']))
						{
								echo '<div id="erreur">Veuillez saisir un mot de passe!</div>';
						}
				//Si tout est bon, on se connecte à la base de données et on vérifie que
				//l'utilisateur existe
				//si ok
				else{
						include("connexion.php");
						connexion_bd();
						//On selectionne les données
						$index = mysql_query("SELECT * FROM clients WHERE
							login='".$_POST['login']."' AND password='".$_POST['password']."'");
					 while($result = mysql_fetch_array($index)){

						//si pas de résultat
						if(mysql_num_rows($index) == 0)
						{
								echo '<div id="erreur">Aucunes données ne correspond à votre saisie!</div>';
						}

						else{
									//on créer la session
									$_SESSION['login'] = utf8_decode($_POST['login']);
									$_SESSION['password'] = utf8_decode($_POST['password']);
									$id=$result['id'];
									//on redirige avec une url crypther
									$hachage = $id;
									$URL_NEWS = "page_conn.php?id=".$hachage;
									header("location:".$URL_NEWS);
									}
							}
					}
			 }
	?>

	 </body>
	</html>
