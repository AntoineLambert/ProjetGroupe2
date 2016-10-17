<!DOCTYPE html>
<html>
<head>
    <title>YoloZazou</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            document.write('<link rel="stylesheet" type="text/css" href="../css/smartphone.css" />');

        } else {
            document.write('<link rel="stylesheet" type="text/css" href="../css/style_index.css" />');
        }
    </script>
    <script type="text/javascript" src="../js/animations.js"></script>
    <script type="text/javascript" src="../js/scrollToTop.js"></script>
    <script type="text/javascript" src="../js/image_zoom.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../../images/logo.png" />
    <!--Page de chargement: Annimation-->
</head>
<!--Body + Architecture en FlexBox-->
<body>
<?php $id_url= $_GET['id']; include("select.php"); ?>

<div class="background"></div>
<div class="main_body">
<!--Div Présentation de l'équipe et de l'entreprise-->

    <div id="intro" class="head">
        <img src="../../images/logo.png" class="logo">
        <h3>Bienvenue <?php echo $_session['nom']; ?> sur votre compte.</h3>
    </div>

    <div class="container">
    <p class="text_center">Votre Historique de Commandes:</p>
        <?php historique_commande();?>
    </div>
    <!--Menu Flottant-->
    <div id="sse2">
        <div id="sses2">
            <ul>
                <li><a href="contact.php">Contactez-nous</a></li>
                <li><a href="equipe.php">Notre équipe</a></li>
                <li><a href="../../index.php?dec=close">Déconnexion</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>