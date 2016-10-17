<!DOCTYPE html>
<html>
<head>
	<title>Hello Wolrd!</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript">
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			document.write('<link rel="stylesheet" type="text/css" href="../css/smartphone.css" />');

		} else {
			document.write('<link rel="stylesheet" type="text/css" href="../inscrip.css" />');
		}
	</script>
	<script type="text/javascript" src="../js/animations.js"></script>
	<script type="text/javascript" src="../js/scrollToTop.js"></script>
	<script type="text/javascript" src="../js/image_zoom.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../../images/logo.png" />
	<!--Page de chargement: Annimation-->
</head>
<body>
<div class="background"></div>
<div class="main_body">
	<div id="caption"></div>
	<?php include ('formulaire_client.php'); ?>

	</div>
</div>
</div>
</body>
</html>
