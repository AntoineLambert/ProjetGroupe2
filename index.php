<!DOCTYPE html>
<html>
<head>
	<title>YoloZazou</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript">
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			document.write('<link rel="stylesheet" type="text/css" href="scripts/css/smartphone.css" />');

		} else {
			document.write('<link rel="stylesheet" type="text/css" href="scripts/css/style_index.css" />');
		}
	</script>
	<script type="text/javascript" src="scripts/js/animations.js"></script>
	<script type="text/javascript" src="scripts/js/scrollToTop.js"></script>
	<script type="text/javascript" src="scripts/js/image_zoom.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
	<!--Page de chargement: Annimation-->
</head>
<!--Body + Architecture en FlexBox-->
<body>
<div class="background"></div>
<div class="main_body">
<!--Div Présentation de l'équipe et de l'entreprise-->

	<div id="intro" class="head">
		<img src="images/logo.png" class="logo">
		<h3>Bienvenue sur YoloZazou, l'entreprise qui vous facilite la vie.<br> Fini les galères avec l'informatique, nous gérons tout pour vous!</h3>
	</div>

<?php include("scripts/php/select.php"); ?>

<!--Div Présentation des trois types d'abonnements-->
	<div class="container">
		<p class="text_center">Ci dessous vous trouverez les différents types d'abonnements disponible sur YoloZazou et leurs avantages.</p>
		<img id="myImg" src="images/Abonnements.png" alt="Abonnements par types">
		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <!-- The Close Button -->
		  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
		  <!-- Modal Content (The Image) -->
		  <img class="modal-content" id="img01">
		  <!-- Modal Caption (Image Text) -->
		  <div id="caption"></div>
		</div>
	</div>

<!--Div Abonnement Gold-->
	<div class="container">
		<img src="images/gold.png" class="gold">
		<p class="gold_text">L'abonnement GOLD vous donne accès à la totalités de nos services.
							<br><br> Il prend en compte l'intervention sur place comme à domicile pour nos abonnés.
							<br><br> La protection et l'entretient, tout comme la formation et les conseils pour les
							différents logiciels est prise en compte.<br><br>
							Grâce à l'abonnement Gold vous n'aurez plus aucuns soucis avec votre matériel informatique!
		</p>
		<?php select_or(); ?>
	</div>

<!--Div Abonnement Silver-->
	<div class="container">
		<img src="images/silver.png" class="gold">
		<p class="gold_text">L'abonnement GOLD vous donne accès à la totalités de nos services.
							<br><br> Il prend en compte l'intervention sur place comme à domicile pour nos abonnés.
							<br><br> La protection et l'entretient, tout comme la formation et les conseils pour les
							différents logiciels est prise en compte.<br><br>
							Grâce à l'abonnement Gold vous n'aurez plus aucuns soucis avec votre matériel informatique!
		</p>
		<?php select_argent(); ?>
	</div>

<!--Div Abonnement Bronze-->
	<div class="container">
		<img src="images/bronze.png" class="gold">
		<p class="gold_text">L'abonnement GOLD vous donne accès à la totalités de nos services.
							<br><br> Il prend en compte l'intervention sur place comme à domicile pour nos abonnés.
							<br><br> La protection et l'entretient, tout comme la formation et les conseils pour les
							différents logiciels est prise en compte.<br><br>
							Grâce à l'abonnement Gold vous n'aurez plus aucuns soucis avec votre matériel informatique!
		</p>
		<?php select_bronze(); ?>
	</div>

<!--Menu Flottant-->
<div id="sse2">
	<div id="sses2">
		<ul>
			<li><a href="scripts/php/contact.php">Contactez-nous</a></li>
			<li><a href="scripts/php/equipe.php">Notre équipe</a></li>
			<input onclick="change()" type="button" id="show" value="Mon Compte"></input>
			<div id="hidden">
				<form method="POST" action="index.php" class="formClass">
					<input class="textInput" type="text" value="<?php if (!empty($_POST["login"]))
						{ echo stripcslashes(htmlspecialchars($_POST["login"],ENT_QUOTES)); } ?>" placeholder="Pseudo" name="login" />
					<label for="login"></label>
					<input class="textInput" type="password" value="<?php if (!empty($_POST["password"]))
						{ echo stripcslashes(htmlspecialchars($_POST["password"],ENT_QUOTES)); } ?>" placeholder="Mot de passe" name="password" />
					<label for="password"></label>
					<button class="buttonInput_co" type="submit" name="Envoyer" value="submit">Se Connecter</button>
				</form>
				<form method="POST" action="scripts/php/formulaire_client.php" class="formClass">	
					<button class="buttonInput" href="scripts/php/formulaire_client.php" value="submit">Créer un compte</button>
				</form>	
				</div>
		</ul>
	</div>
</div>

<div>
	<a href="#" class="scrollToTop"><img id ="top" src = "images/up.png"/></a>
</div>
</body>
</html>