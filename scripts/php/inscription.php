<?php
include("connexion.php");
connexion_bd();
//On vérifie si le pseudo existe en bd

  $pseudo = mysql_query("SELECT login FROM clients
    WHERE login='".mysql_real_escape_string(stripcslashes($_POST['login']))."'")
     or die ('Erreur :'.mysql_error());

  if(mysql_num_rows($pseudo) != 0)
  {
      echo '<div id="erreur">Ce pseudo est déjà utilisé!</div>'; return false;
  }
//on vérifie si le mail existe en bd

  $email = mysql_query("SELECT email FROM clients
    WHERE email='".mysql_real_escape_string(stripcslashes($_POST['email']))."'")
     or die ('Erreur :'.mysql_error());

  if(mysql_num_rows($email) != 0)
  {
      echo '<div id="erreur">Cet email est déjà utilisé!</div>'; return false;
  }
//tout est ok
else{

  // on enregistre les données
  $insert = mysql_query("INSERT INTO clients
  VALUES ( '', '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['nom'])))."',
   '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['prenom'])))."',
   '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['adresse'])))."',
   '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['cp'])))."',
   '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['ville'])))."',
   '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['login'])))."',
   '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['tel'])))."',
   '".mysql_real_escape_string(stripcslashes($_POST['email']))."',
   '".mysql_real_escape_string(stripcslashes(utf8_decode($_POST['password'])))."',
   '".mysql_real_escape_string(stripcslashes('0'))."',
   '".mysql_real_escape_string(stripcslashes('0'))."')");

  //Si il y a une erreur
  if (!$insert) {
    die('Requête invalide : ' . mysql_error());
  }
}

header('Location:../../index.php');

?>
