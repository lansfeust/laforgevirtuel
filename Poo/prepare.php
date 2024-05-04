<?php

/*################################################
#				Programme principal
################################################*/

/*# -----------------------------------------------
#		    Zone des 'imports' de modules
# -----------------------------------------------*/
include_once('config\connexion.php') ;
include_once('formulaire_simple.html');

/*# ----------------------------------------------------
#		Zone de déclaration des variables globales
# ----------------------------------------------------*/
$insertion = <<<'AEO'
INSERT INTO inscrit (id , pseudo , password , Dateinscription ) VALUES(null, ? , ? , ? )
AEO;
$reception = [$_GET['nom'],$_GET['password'], time()];

/*# -------------------------------------------------------
#		Zone de déclaration des modules ou des fonctions
# -------------------------------------------------------*/

/*# -------------------------------------------------------
#						PROGRAMME
# -------------------------------------------------------*/
$pdo->prepare($insertion)->execute($reception);
var_dump($pdo);

echo '<hr><pre>';
print_r($insertion);
echo '</pre><hr>';

echo '<hr><pre>';
print_r($reception);
echo '</pre><hr>';
?>