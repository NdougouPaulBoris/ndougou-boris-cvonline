<?php
$DB_serveur = 'mysql'; // Nom du serveur
$DB_utilisateur = 'root'; // Nom de l'utilisateur de la base
$DB_motdepasse = ''; // Mot de passe pour accèder à la base
$DB_base = 'bdcv'; // Nom de la base

$connection = mysqli_connect($DB_serveur, $DB_utilisateur, $DB_motdepasse) // On se connecte au serveur
or die (mysqli_error().' sur la ligne '.__LINE__);

mysqli_select_db($DB_base, $connection) // On se connecte à la BDD
or die (mysqli_error().' sur la ligne '.__LINE__);
?>