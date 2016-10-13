<?php
include("connexion.php");
connexion_bd();

$id_session=$_GET['id'];
$id_abo=$_GET['id_abo'];
$mois_update = $_GET['mois_abo'];

$insert = mysql_query("UPDATE clients
  SET mois='".$mois_update."' WHERE id='".mysql_real_escape_string($id_session)."'");

  if (!$insert) {
    die('Requête invalide : ' . mysql_error());
  }
  print $mois_update."vdkzd";
  print "UPDATE clients SET mois= '".$_GET['mois_abo']."' WHERE id=$id_session";

?>
