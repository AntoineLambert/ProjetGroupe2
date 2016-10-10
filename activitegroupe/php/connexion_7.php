
<?php

//
// include_once "config.php";
//
//
// $db = mysqli_connect($SERVER, $USER, $PASS, $DBASE);
//
// /* Vérification de la connexion */
// if (mysqli_connect_errno()) {
//     printf("Échec de la connexion : %s\n", mysqli_connect_error());
//     $b_connect=FALSE;
//     exit();
// }
// else {
//
// $b_connect=TRUE;//Connexion réussie
// mysqli_select_db($DBASE,$db);
// print "Yo connexion PHP 7 trop cool !<br>\n";
//
// }
//

//mysqli_close($db);

function connexion_bd(){

      $nom_du_serveur ="localhost";
      $nom_de_la_base ="service";
      $nom_utilisateur ="root";
      $passe ="root";

      $link = mysql_connect ($nom_du_serveur,$nom_utilisateur,$passe);
      mysql_select_db($nom_de_la_base, $link);

  }

?>
