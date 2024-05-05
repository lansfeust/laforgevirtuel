<?php
include_once('Poo\formulaire_simple.html');

$nom = $_GET['nom'];
$databaseFile = "$nom.sqlite";

$database = new SQLite3($databaseFile);

if (!$database) {
    die("Erreur lors de la connexion à la base de données : " . $database->lastErrorMsg());
} else {
    echo "Connexion à la base de données réussie !";
}
?>
