<?php

/*################################################
#				Programme principal
################################################*/

/*# -----------------------------------------------
#		    Zone des 'imports' de modules
# -----------------------------------------------*/
include_once('..\config\connexion.php') ;
include_once('..\formulaire_simple.html');

/*# ----------------------------------------------------
#		Zone de déclaration des variables globales
# ----------------------------------------------------*/
$insertion = <<<'AEO'
DELETE FROM inscrit WHERE id = ?
AEO;
$reception = [@$_GET['nom']] ;
/*# -------------------------------------------------------
#		Zone de déclaration des modules ou des fonctions
# -------------------------------------------------------*/

/*# -------------------------------------------------------
#						PROGRAMME
# -------------------------------------------------------*/

if (isset($_GET['nom'])) {
    $pdo->prepare($insertion)->execute($reception);
}




?>