<?php
include_once "config.php";

//connexion à la bdd en php 5 ou PHP 7
print "Debut test conn ok<br>\n";
if ($ModePHP==5) {
  include "connexion_5.php";
} else {
//print "en conn 7<br>\n";
  include "connexion_7.php";
}

//********************* Je peux faire un INSERT INTO pépère ! ******************

if ($_POST['nom']!=null && !empty( $_POST['prenom'] )) {

$req = "INSERT INTO clients(nom, prenom, adresse, cp, ville, login, tel, email, password)
VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['adresse']."','".$_POST['cp']."','".$_POST['ville']."','".$_POST['login']."','".$_POST['tel']."', '".$_POST['email']."', '".$_POST['password']."')";
//$req ="select * from client";
print $req;




header('Location:index.php');
//----------------------------------
/* Requête "Select" retourne un jeu de résultats  mysqli_query ===> PHP7,  mysql_query ===>PHP5 */

//*******************************************************************************

if ($result = mysqli_query($db, $req)) {
    /* Libération du jeu de résultats */
    mysqli_free_result($result);
	include "JS_PHP_ENRG_OK.php";//Je confirme l'enreigstrement
}



}
?>
