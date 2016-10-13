
<?php

function connexion_bd(){

    $nom_du_serveur ="lambertazytoine.mysql.db";
    $nom_de_la_base ="lambertazytoine";
    $nom_utilisateur ="lambertazytoine";
    $passe ="8mYifsuc";

    $link = mysql_connect ($nom_du_serveur,$nom_utilisateur,$passe) or die ('Erreur : '.mysql_error());
    mysql_select_db($nom_de_la_base, $link) or die ('Erreur :'.mysql_error());
    if (!$link) {
        die('Connexion impossible : ' . mysql_error() . "<br/>");
    }
}
function close_bd()
{
    mysql_close();
}

?>
