</pre>

<?php
//Autochargement
include('classes\moncookies.php');

include('config\autocalculatrice.php');
// require_once('config\autoload.php') ; impossible d'ouvrir 2 autoload
?>

<?php
//utilisation de la class
$personne = new MaCalculatrice() ;
?>


<?php include('classes\calculatrice\calculatrice.html');//Affichage du formulaire html ?>