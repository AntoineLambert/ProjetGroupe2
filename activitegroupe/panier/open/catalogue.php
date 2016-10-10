<!DOCTYPE>
<html>
<header class="panel-words">
  <link rel="stylesheet" type="text/css" href="style.css">

  <h1>Mon panier</h1>
</header>
<body>

    <div class="panier">
  <a href="panier.php?action=ajout&amp;l=or&amp;q=1&amp;p=30€" onclick="window.open(this.href, '',
  'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">
  <button id="btn-buy-1">Or 30€</button></a>

  <p><form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NHWDAZ7D5MYLW">
<input type="image" src="https://www.sandbox.paypal.com/fr_FR/FR/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.sandbox.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

  </p>
  <a href="panier.php?action=ajout&amp;l=argent&amp;q=1&amp;p=20€" onclick="window.open(this.href, '',
  'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">
  <button id="btn-buy-2">Argent 20€</button></a>
  <a href="panier.php?action=ajout&amp;l=bronze&amp;q=1&amp;p=10€" onclick="window.open(this.href, '',
  'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">
  <button id="btn-buy-3">Bronze 10€</button></a>

</form>


    </div>

</body>
<footer>
</footer>
</html>
