<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="coop.css" media="screen"/>
<title>service</title>
</head>
<body>
	<?php
	session_start();
	if(isset($_GET['dec']) && $_GET['dec']=="close"){
		unset($_SESSION['pseudo']);
		unset($_SESSION['pass']);
} ?>
	<p> service Informatique</p>
	<a class="button" href="inscription.php">deconnexion</a>

	<a href="indexa.php?dec=close">deconnexion1</a>
	</body>
</html>
