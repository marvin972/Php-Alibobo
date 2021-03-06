<link rel="stylesheet" href="/assets/css/style.css">
<?php

require_once './functions/autoLoad.php';
autoLoad("*.php");


echo $_SERVER["SERVER_SOFTWARE"];

// Définir le fuseau horaire dans laquel le serveur se trouve 
date_default_timezone_set('Europe/Paris');

/* Utiliser include ou require
include renvoie un avertisement simple en cas d'erreur
require renvoie une erreur fatale et arrête l'éxécution du scripte */

require_once './includes/header.php';
require_once './includes/main.php';
require_once './includes/footer.php';

