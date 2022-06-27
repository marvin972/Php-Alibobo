<link rel="stylesheet" href="/assets/css/style.css">
<?php
// Définir le fuseau horaire dans laquel le serveur se trouve 
date_default_timezone_set('Europe/Paris');

/* Utiliser include ou require
include renvoie un avertisement simple en cas d'erreur
require renvoie une erreur fatale et arrête l'éxécution du scripte */

include './includes/header.php';
include './includes/main.php';
include './includes/footer.php';

