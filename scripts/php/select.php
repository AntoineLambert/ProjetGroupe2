<?php
include("connexion.php");
connexion_bd();
// vérification des données saisies par l'utilisateur
if(isset($_POST['Envoyer'])){
    //si pseudo vide
    if(empty($_POST['login']))
    {
        echo '<div id="erreur">Veuillez saisir un pseudo!</div>';
    }
    //si mot de passe vide
    else if(empty($_POST['password']))
    {
        echo '<div id="erreur">Veuillez saisir un mot de passe!</div>';
    }
//Si tout est bon, on se connecte à la base de données et on vérifie que
//l'utilisateur existe
//si ok
else{
    //On selectionne les données
    $index = mysql_query("SELECT * FROM clients WHERE
      login='".$_POST['login']."' AND password='".$_POST['password']."'");
   while($result = mysql_fetch_array($index)){

    //si pas de résultat
    if(mysql_num_rows($index) == 0)
    {
        echo '<div id="erreur">Aucunes données ne correspond à votre saisie!</div>';
    }

    else{
          //on créer la session
          $_SESSION['login'] = utf8_decode($_POST['login']);
          $_SESSION['password'] = utf8_decode($_POST['password']);
          $id=$result['id'];
          //on redirige avec une url crypther
          $hachage = $id;
          $URL_NEWS = "page_conn.php?id=".$hachage;
          header("location:".$URL_NEWS);
          }
      }
  }
}

	$select1 = mysql_query("SELECT * FROM abonnements");
	while($abonnements = mysql_fetch_array($select1)){
		$id_abo=$abonnements['id'];
		$nom_abo=$abonnements['nom'];
		$prix_abo=$abonnements['prix'];
		?><div class="list_abonnements"><?php
					echo '<p>abonnements: '.$abonnements['nom'].'</p>';
					echo '<p>prix: '.$abonnements['prix'].'</p>';
		?></div><?php
	}

?>
