
<?php

include('Poo\formulaire_simple.html');
//  include_once('Poo\formulaire_simple.html');
include_once('Poo\classes\Famille.class.php');

  $mafamille = new Famille( 'ma_base_de_donnees.db' ) ;
$tableau =  $mafamille -> getBdd() ;

foreach ( $tableau as $var ){
    print_r($var) ;
}
?>
<!--
$bdd = new SQLite3('ma_base_de_donnees.db');

$requete = "CREATE TABLE IF NOT EXISTS famille (
    idFamille INTEGER PRIMARY KEY,
    NomFamille TEXT NOT NULL
)";

$bdd->exec($requete);
echo "Table 'famille' créée avec succès !<hr>";



if ( @$_GET['nom'] ) {
    
    $requeteInsertion = "INSERT INTO famille (NomFamille) VALUES ( '$_GET[nom]' )";
    $bdd->exec($requeteInsertion);
    echo "Données insérées avec succès !<hr>";
}

if ( @$_GET['get'] ) {
    
    // Exécution de la requête SELECT
$results = $bdd->query('SELECT idFamille, NomFamille FROM famille');

// Parcours des résultats
while ($var = $results->fetchArray(SQLITE3_ASSOC)) {
    echo "ID : " . $var['idFamille'] . ", Nom : " . $var['NomFamille'] . "<br>";
}
}
$bdd = null
?-->