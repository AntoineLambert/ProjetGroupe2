<?php



include_once "config.php";

//**************** VARIABLES CONNEXION BDD ************************
//***************************************************************

//
//$nomsite = "Connection base de données site mabase";
//$db = mysql_connect($SERVER, $USER, $PASS) or die("Impossible de se connecter à la base de donn&eacute;es du site web.");

//********** Cette connnexion est également fonctionnelle******************
if ($ModeDebog==1) {print "Début test de connexion <br>\n";}

$db = mysql_connect($SERVER, $USER, $PASS);
if (!$db) {
    die('Connexion impossible : ' . mysql_error());
	//On peut imaginer ici orienter le visiter ou l'administrateur (back-end) sur une page d'erreur personnalisée
  $b_connect = FALSE;//st un booléen qui renoie un PAS OK CONNECT
}
else {

  $b_connect = TRUE;//st un booléen qui renoie un OK CONNECT
  mysql_select_db($DBASE,$db);

  if ($ModeDebog==1) {print "Yo connexion PHP 5 réussie !bravo mon pote !<br>\n";}
}
//mysql_close($db); //Ici je ferme la connexion, ce qui peut-être embétant pour les traitements suivants !
//**************************************************************************
if ($ModeDebog==1) {print "Fin test de connexion <br>\n";}
?>
