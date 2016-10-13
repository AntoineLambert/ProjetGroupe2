<?php
include("connexion.php");
connexion_bd();
$a="1";

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
          $URL_NEWS = "scripts/php/page_conn.php?id=".$hachage;
          header("location:".$URL_NEWS);
          }
      }
  }
}

function historique_commande(){
  $id_session=$_GET['id'];
  $select_historique = mysql_query("SELECT a.id, a.prix, c.id, c.nom, c.prenom, c.adresse, c.cp, c.ville, c.login, c.tel, c.email, c.password, c.mois, c.abonnements FROM clients AS c INNER JOIN abonnements AS a ON c.abonnements = a.nom where c.id=$id_session");
  while($historique = mysql_fetch_array($select_historique)){
    $prenom_abo=$historique['prenom'];
    $nom_abo=$historique['nom'];
    $mois_abo=$historique['mois'];
    $abo=$historique['abonnements'];
    $adresse=$historique['adresse'];
    $ville=$historique['ville'];
    $cp=$historique['cp'];
    $prix=$historique['prix'];
    ?><div class="historique_abo"><?php

      echo '<p class="client_abo">Client: '.$nom_abo.' '.$prenom_abo.'</p>';
      echo '<p class="adresse_client">Adresse: '.$adresse.' '.$cp.' '.$ville.'</p>';
      echo '<p class="abo">Abonnements: '.$abo.'</p>';
      echo '<p class="mois_abo">Nombres de mois: '.$mois_abo.'</p>';
      echo '<p class="prix_abo">Prix: '.$prix*$mois_abo*1.2.'€ TTC</p>';
?></div><?php
  } 
}

function select_or(){
  $id_session=$_GET['id'];
  $select_or = mysql_query("SELECT * FROM abonnements where id='1'");
  while($abonnements = mysql_fetch_array($select_or)){
    $id_abo=$abonnements['id'];
    $nom_abo=$abonnements['nom'];
    $prix_abo=$abonnements['prix'];
    $val=$a++;
    ?><div class="list_abonnements<?php echo $val; ?>"><?php

          echo '<p class="prix_abo">prix: '.$prix_abo.'€</p>';
          ?><form class="buyForm" name="form<?php echo $val; ?>" method="POST" action="<?php $URL_NEWS = "achat.php?id_abo=".$id_abo."&id=".$id_session."&nom_abo=".$nom_abo."&prix=".$prix_abo."&obj=mois_abo".$val;
          print $URL_NEWS;
           ?>">
              <input class="mounthInput" id="nb_mois1" type="text" name="mois_abo<?php echo $val; ?>" placeholder="nombre de mois"><br>
              <input class="buyButton" name="submit<?php echo $val; ?>" value="s'abonner" type="submit" target="_blank" />
            </form>
    </div><?php
  }
}
 
function select_argent(){
  $id_session=$_GET['id'];
  $select_argent = mysql_query("SELECT * FROM abonnements where id='2'");
  while($abonnements = mysql_fetch_array($select_argent)){
    $id_abo=$abonnements['id'];
    $nom_abo=$abonnements['nom'];
    $prix_abo=$abonnements['prix'];
    $val=$a++;
    ?><div class="list_abonnements<?php echo $val; ?>"><?php

          echo '<p class="prix_abo">prix: '.$prix_abo.'€</p>';
          ?><form class="buyForm" name="form<?php echo $val; ?>" method="POST" action="<?php $URL_NEWS = "achat.php?id_abo=".$id_abo."&id=".$id_session."&nom_abo=".$nom_abo."&prix=".$prix_abo."&obj=mois_abo".$val;
          print $URL_NEWS;
           ?>">
              <input class="mounthInput" id="nb_mois2" type="text" name="mois_abo<?php echo $val; ?>" placeholder="nombre de mois"><br>
              <input class="buyButton" name="submit<?php echo $val; ?>" value="s'abonner" type="submit" />
            </form>
    </div><?php
  }
}

function select_bronze(){
  $id_session=$_GET['id'];
  $select_bronze = mysql_query("SELECT * FROM abonnements where id='3'");
  while($abonnements = mysql_fetch_array($select_bronze)){
    $id_abo=$abonnements['id'];
    $nom_abo=$abonnements['nom'];
    $prix_abo=$abonnements['prix'];
    $val=$a++;
    ?><div class="list_abonnements<?php echo $val; ?>"><?php

          echo '<p class="prix_abo">prix: '.$prix_abo.'€</p>';
          ?><form class="buyForm" name="form<?php echo $val; ?>" method="POST" action="<?php $URL_NEWS = "achat.php?id_abo=".$id_abo."&id=".$id_session."&nom_abo=".$nom_abo."&prix=".$prix_abo."&obj=mois_abo".$val;
          print $URL_NEWS;
           ?>">
              <input class="mounthInput" id="nb_mois3" type="text" name="mois_abo<?php echo $val; ?>" placeholder="nombre de mois"><br>
              <input class="buyButton" name="submit<?php echo $val; ?>" value="s'abonner" type="submit" />
            </form>
    </div><?php
  }
}

  if(isset($_POST['submit'.$val.''])){

    $insert = mysql_query("UPDATE clients
      SET mois='".$_POST['mois_abo'.$val.'']."',abonnements='".$nom_abo."' WHERE id='".mysql_real_escape_string($id_session)."'");

      if (!$insert) {
        die('Requête invalide : ' . mysql_error());
      }
    }

?>
<script>
document.getElementById("nb_mois1").value = '';
document.getElementById("nb_mois2").value = '';
document.getElementById("nb_mois3").value = '';
</script>
