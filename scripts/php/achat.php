<!DOCTYPE html>
<html>
<head>
	<title>Facture</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css/facture.css" media="screen"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<?php
include("connexion.php");
connexion_bd();
$id=$_GET['id'];
$id_abo=$_GET['id_abo'];
$prix_abo=$_GET['prix'];
$nom_abo=$_GET['nom_abo'];
$MonObjet = $_GET['obj'];
$num_facture=rand(0,10000);

mysql_query("UPDATE clients SET mois='".$_POST[$MonObjet]."',abonnements='".$nom_abo."' WHERE id='".mysql_real_escape_string($id)."'");
?>
    <body>
    <div class="invoice">
        <div class="company-address">
            Start-up
            <br />
            Pôleyrieux
            <br />
            07160 le cheylard
            <br />
        </div>

        <div class="invoice-details">
            Facture N°: <?php echo $num_facture.$id.$id_abo; ?>
            <br />
            <?php echo 'Date: '.date("d-m-Y"); ?>
        </div>

        <div class="customer-address">
          <?php $index = mysql_query("SELECT * FROM clients WHERE id=$id");
          $nb_ligne = mysql_num_rows($index);
         while($result = mysql_fetch_array($index)){
           echo '<h3>'.$result['nom'].' '.$result['prenom'].'</h3>';
           echo '<h4>'.$result['adresse'].'</h4>';
           echo '<h4>'.$result['cp'].' '.$result['ville'].'</h4>';
           $mois = $result['mois'];
          }
          ?>
        </div>

        <div class="clear-fix"></div>
            <table border='1' cellspacing='0'>
                <tr>
                    <th width=250>Description</th>
                    <th width=100>Quantité</th>
                    <th width=100>Prix unitaire</th>
                    <th width=100>Prix total</th>
                </tr>

            <?php
            $total = 0;
            $tva = 20;

            $articles = array(
                        array("abonnements: <b>".$nom_abo."</b>"),
                        array($mois." mois"),
                        array($prix_abo)
            );

            for($a=0;$a<$nb_ligne;$a++) {
                    $description = $articles[0][$a];
                    $quantité = $articles[1][$a];
                    $prix_unitaire = number_format( $articles[2][$a], 2);
                    $prix_total = number_format( $quantité * $prix_unitaire, 2);
                    $total += $prix_total;
                    echo("<tr>");
                    echo("<td>$description</td>");
                    echo("<td class='text-center'>$quantité</td>");
                    echo("<td class='text-right'>$prix_unitaire €</td>");
                    echo("<td class='text-right'>$prix_total €</td>");
                    echo("</tr>");
            }

            echo("<tr>");
            echo("<td colspan='3' class='text-right'>Total net HT</td>");
            echo("<td class='text-right'><b>" . number_format($total,2) . " €</b></td>");
            echo("</tr>");
            echo("<tr>");
            echo("<td colspan='3' class='text-right'>TVA</td>");
            echo("<td class='text-right'>" . number_format(($total*$tva)/100,2) . " €</td>");
            echo("</tr>");
            echo("<tr>");
            echo("<td colspan='3' class='text-right'><b>Montant total TTC à régler</b></td>");
            echo("<td class='text-right'><b>" . number_format(((($total*$tva)/100)+$total),2) . " €</b></td>");
            echo("</tr>");
            ?>
            </table>
            <a href="page_conn.php?id=<?php echo $id; ?>">retour</a>
        </div>
    </body>

</html>

