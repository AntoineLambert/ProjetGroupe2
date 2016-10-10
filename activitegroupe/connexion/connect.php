<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=service', 'root', '');

if(isset($_POST['tchat'])) {
   $email = htmlspecialchars($_POST['email']);
   $password = sha1($_POST['password']);
   if(!empty($email) AND !empty($password)) {
      $requser = $bdd->prepare("SELECT * FROM clients WHERE email = ? AND password = ?");
      $requser->execute(array($email, $password));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['login'] = $userinfo['login'];
         $_SESSION['email'] = $userinfo['email'];
         //print "fsdfsf = ".$_SESSION['id'];
          header('Location: indexa.php?id='.$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<div class="flexbody">
    <div class="menu_left">
      <h4><p>Connexion</p></h4>

      <form method="POST" action="">
         <p><input class="b" type="text" type="email" name="email" placeholder="Mail" style="height:30px" size="20px"/></p>
         <input class ="a" type="text" type="password" name="password" placeholder="Mot de passe" style="height:30px" size="20px"/>

         <p><input class="connexion" type="submit" name="tchat" value="" /></p>
      </form>

      <?php
      if(isset($erreur)) {
         echo '<font color="red">'.$erreur."</font>";
      }
      ?>
    </div>
