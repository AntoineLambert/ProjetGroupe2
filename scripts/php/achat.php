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
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
        ">
        <input type="image" src="https://www.sandbox.paypal.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
        <img alt="" border="0" src="https://www.sandbox.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
        </form>
    </body>

</html>

