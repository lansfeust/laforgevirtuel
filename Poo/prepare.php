<?php

/*################################################
#				Programme principal
################################################*/

/*# -----------------------------------------------
#		    Zone des 'imports' de modules
# -----------------------------------------------*/
try {
    include_once('config\connexion.php') ;
} catch (\Throwable $th) {
    //throw $th;
}
include_once('formulaire_simple.html');

/*# ----------------------------------------------------
#		Zone de déclaration des variables globales
# ----------------------------------------------------*/
$insertion = <<<'AEO'
INSERT INTO inscrit (id , pseudo , password , Dateinscription ) VALUES(null, ? , ? , now() )
AEO;
$reception = [ $_GET['nom'],$_GET['password'] ];

$montest = "INSERT INTO `inscrit`(`id`, `pseudo`, `password`, `Dateinscription`) VALUES ( Null , 'lansfeust de odissey','Non ne me regarde pas ',now() )" ;
//  $reception = "INSERT INTO `inscrit`(`id`, `pseudo`, `password`, `Dateinscription`) VALUES ( Null , 'lansfeust de odissey','Non ne me regarde pas ',now() )"" ;
/*# -------------------------------------------------------
#		Zone de déclaration des modules ou des fonctions
# -------------------------------------------------------*/

/*# -------------------------------------------------------
#						PROGRAMME
# -------------------------------------------------------*/
try {
    $pdo->prepare($insertion)->execute($reception);
    var_dump($pdo);
} catch (\Throwable $th) {
    //throw $th;
}

echo '<hr><pre>';
print_r($insertion);
echo '</pre><hr>';

echo '<hr><pre>';
print_r($reception);
echo '</pre><hr>';
?>