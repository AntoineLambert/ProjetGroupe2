<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<title>Ajouter un client</title>
</head>

<body>

<center><h1>Inscription</h1></center>
<form action="inscription.php" method="post">
<center><table width="450" border="1" >
  <tr>
    <td>Nom :</td>
    <td><input align="right" type="text" name="nom" size=30 maxlength="40" /></td>
  </tr>
  <tr>
    <td>Prénom :</td>
    <td><input type="text" name="prenom" size=30 maxlength="40" /></td>
  </tr>
  <tr>
    <td>Adresse :</td>
    <td><input type="text" name="adresse" size=30 maxlength="150" /></td>
  </tr>
  <tr>
    <td>Code postal :</td>
    <td><input type="text" name="cp" size=30 maxlength="40" /></td>
  </tr>
  <tr>
    <td>Ville :</td>
    <td><input type="text" name="ville" size=30 maxlength="40" /></td>
  </tr>
  <tr>
   <td>login:</td>
    <td><input type="text" name="login" size=30 maxlength="40" /></td>
  </tr>
  <tr>
    <td>Tel fixe : </td>
    <td><input type="text" name="tel" size=30 maxlength="40" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" size=30 maxlength="40" /></td>
  </tr>
  <tr>
   <td>Password :</td>
    <td><input type="text" name="password" size=30 maxlength="40" /></td>
  </tr>
  <tr>
    <td>Confirme password :</td>
     <td><input type="text" name="password" size=30 maxlength="40" /></td>
   </tr>
    <td colspan="2"><input align="center" type="submit" value="Enregistrer" /></td>
  </tr>
</table>
</center>
</form>
</body>
</html>
