<?php  
//Ecrivez votre adresse e-mail entre les guillemets  
$destinataire='lambert.antoine@hotmail.fr';  
?>
<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Contact</title>
  <script type="text/javascript">
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      document.write('<link rel="stylesheet" type="text/css" href="../css/smartphone.css" />');

    } else {
      document.write('<link rel="stylesheet" type="text/css" href="../css/style_index.css" />');
    }
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
</head>
<body style="direction: ltr;">
<div id="dialoguer"><br><br>
  <h1>Contact</h1>
  <div class="contactdesign">
  <br>
  <?php   
  $Envoi="\n".'<p class="bt">  
  <input name="envoi" tabindex="4" value="Send" type="submit" class="input"></p>';  
  if (isset($_POST['message']))  
    {  
      // La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne  
      $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';  
      //quelques remplacements pour les specialchars  
      $message=preg_replace('#(<|>)#', '-', $_POST['message']);  
      $message=str_replace('"', "'",$message);  
      $message=str_replace('&', 'et',$message);  
      $objet=preg_replace('#(<|>)#', '-', $_POST['objet']);  
      $objet=str_replace('"', "'",$objet);  
      $objet=str_replace('&', 'et',$objet);  
      // On assigne et/ou protège nos variables  
      $votremail=stripslashes(htmlentities($_POST['votremail']));  
      $message=stripslashes(htmlspecialchars($message));  
      $objet=stripslashes(htmlspecialchars($objet));  
      //input envoi/previsualiser  
      $envoi=htmlentities($_POST['envoi']);  
      $previsualiser=htmlentities($_POST['previsualiser']);  
      //on enlève les espaces  
      $votremail=trim($votremail);  
      $message=trim($message);  
      $objet=trim($objet);  

      // $apercu_resultat='<p></p>';

      /*On vérifie si l'e mail et le message sont pleins, et on agit en fonction.  
        (on affiche Apercu du resultat, tel ou tel champ est vide, etc...*/  
      //Si ca ne vas pas (mal rempli, mail non valide...)  
      if((empty($message))or(empty($objet))or(!preg_match($verif,$votremail)))  
        {  
          //les 3 champs sont vides  
          if(empty($votremail)and(empty($message))and(empty($objet)))  
            {  
              echo '<p>You could at least write something...</p>';  
              $message='';$votremail='';$objet='';$apercu_resultat='';  
            }  
          //un des champs est vide  
          else  
            {  
              if(!preg_match($verif,$votremail))  
                echo'<p>Invalid email adress.</p>';  
              else  
              {  
                echo'<p>Ooops you forget something no? !</p>';  
                if(empty($message))  
                  $apercu_resultat='';  
              }  
            }  
        }  
      //Si les deux sont pleins et que l'adresse est valide, on envoie on on prévisualise sans envoi  
      else  
        {  
          $domaine=preg_replace('#[^@]+@(.+)#','$1',$votremail);  
          $DomaineMailExiste=checkdnsrr($domaine,'MX');  
          if(!$DomaineMailExiste)  
            echo'<p>Invalid email</p>';  
          elseif(!empty($previsualiser))  
              {  
                $apercu_resultat='<p>Everything looks good, you can click on "Send" if you want.<br>Preview :</p>';  
                $Previsualiser='';  
              }  
          elseif(!empty($envoi))  
              {  
                $objet='[SITE] : '.$objet;  
                $headers='From:'.$votremail."\r\n".'To:'.$mail."\r\n".'Subject:'.$objet."\r\n".'Content-type:text/plain;charset=iso-8859-1'."\r\n".'Sent:'.date('l, F d, Y H:i');  
                if(mail($destinataire,$objet,$message,$headers))  
                {  
                  echo '<p>Message well sent, thank you !</p>';
                  print ('<a href="../../index.php"><p id="retour">Back to main page?</p></a>');
                  $Envoi='';  
                  $Previsualiser='';  
                }  
                else  
                  echo'<p>An error occured, I am sorry...</p>';  
              }  
          else  
            echo'<p>An error occured, I am sorry...</p>';  
        }  
  echo $apercu_resultat;  
    }  
  else  
    {   
    $votremail='';$message='';  
    }  
  $bas_formulaire=$Envoi;  
  ?>  
  <form id='contact' method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">  
    <p id='obj'><label for='objet'>Subject :<br>  
    <input type='text' name='objet' id='objet' tabindex='10' size='30' class="userinput"></label></p>   

    <p id="adr"><label for="mail">Your E-mail<br>  
    <input class="userinput" name="votremail" tabindex="20" size="30" type="text" id="mail" value="<?php echo $votremail; ?>"></label></p>  
      
    <p id="msg"><label for="message">Your message<br>  
    <textarea class="userinput" tabindex="30" rows="20" cols="40" name="message" id="message"><?php echo $message; ?></textarea>  
    </label></p>  
  <?php echo $bas_formulaire;?>
  </form>
  </div>
</div>
<!--Menu Flottant-->
<div id="sse2">
  <div id="sses2">
    <ul>
      <li><a href="../../index.php">Revenir au Menu Principal</a></li>
    </ul>
  </div>
</div>
</body>
</html>