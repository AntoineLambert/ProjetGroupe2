<!DOCTYPE html>
<html>
<head>
	<title>Hello Wolrd!</title>
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
	<link rel="shortcut icon" type="image/x-icon" href="imgages/logo.png" />
	<!--Page de chargement: Annimation-->
</head>
<!--Body + Architecture en FlexBox-->
<body>
<div class="background"></div>
<div class="main_body">

<!--Div Présentation de l'équipe et de l'entreprise-->
	<div id="intro" class="head">
		<img src="images/logo1.png" class="logo" href="index.html">
		<h2>Une  equipe  de  choc</h2>
	</div>

<!--Div Présentation des trois types d'abonnements-->
	<div class="container_equipe">
		<p class="equipe_textc">Chacun a sa spécilité, cette union est une force. Pour vous c'est l'assurance de répondre à tout vos problèmes.</p>

		<div id="myModal" class="modal">
		  <!-- The Close Button -->
		  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
		  <!-- Modal Content (The Image) -->
		  <!-- Modal Caption (Image Text) -->
		  <div id="caption"></div>
		</div>
	</div>

<!--Div Abonnement Gold-->
	<div class="container_equipe">
		<img  src="images/erwan.png" class="equipe" alt="">
		<!-- The Modal -->
		<div id="myModal" class="modal">
		  <!-- The Close Button -->
		  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
		  <!-- Modal Content (The Image) -->
		  <img class="modal-content" id="img02">
		  <!-- Modal Caption (Image Text) -->
		  <div id="caption"></div>
		</div>
		<p class="equipe_text">Erwan
				<br>
							<br>Le manager
							<br>
							<br>Jeune dynamique enthousiaste il sait motiver son équipe.
		</p>
	</div>

<!--Div Abonnement Silver-->
	<div class="container_equipe">
		<img src="images/antoine.png" class="equipe">
		<p class="equipe_text">Antoine
							<br>
							<br>le web designer<br>
							<br> Il est passionné par son métier
							<br>Grâce à sa formation de game designer et de web développeur Web avec Simplon, il connaît plusieurs languages.
		</p>
	</div>

<!--Div Abonnement Bronze-->
	<div class="container_equipe">
		<img src="images/Alex.png" class="equipe">
		<p class="equipe_text">Alex<br>
											<br>le spécialiste de la sécurité<br>
							<br>Il à suivi une formation classique C++, avec Simplon il a élargi ses compétences.
													<br><br> <br><br>
		</p>
	</div>
	<div class="container_equipe">
		<img src="images/Fanny.png" class="equipe">
		<p class="equipe_text">Fanny<br>
							<br>La polyvalente<br>
													<br>Grace à sa formation de comptable elle s'occupe de la partie  administrative. Passioné  par l'art elle peut être très créative.
													<br> <br><br>
		</p>
	</div>

<!--Menu Flottant-->
<div id="sse2">
	<div id="sses2">
		<ul>
			<li><a href="">Contactez-nous</a></li>
			<li><a href="">Achats</a></li>
			<li><a href="">Mon espace client</a></li>
			<li><a href="">Notre équipe</a></li>
		</ul>
	</div>
</div>

<div>
	<a href="#" class="scrollToTop"><img id ="top" src = "images/up.png"/></a>
</div>
</body>
</html>
