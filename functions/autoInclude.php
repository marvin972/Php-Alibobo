<?php

function autoInclude(string $file): void {
// Récupération de tous les fichier du répertoire 'includes' avec la double extension
    $includedFiles = glob("./includes/*.inc.php");
// Concaténation du nom de fichier avec le chemin et l'extension
    $file = "./includes/" . $file . ".inc.php";

// Si le nombre de fichiers dans le tableau est > 0 et que la chaîne de caractères $files est dans le tableau
    if (count($includedFiles) !== 0 && in_array($file, $includedFiles)) {
        require_once $file;
    } else {
        require_once './includes/accueil.inc.php';
    }
}