<?php
//On créer des sessions et pour que ça fonctionne, il faut en déclarer l'ouverture.
session_start();
//destruction de la session
if(isset($_GET['dec']) && $_GET['dec']=="close"){
    unset($_SESSION['pseudo']);
    unset($_SESSION['password']);
}
