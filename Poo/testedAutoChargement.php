<?php
require_once('config\autoload.php') ;

$miam = new moncookies('cookiMan',"c'est un cookies qui parle",2) ;
$pipelette = new Personne ;
echo $pipelette->parler();


?>.

<pre>
<?php
print_r($pipelette) ;

echo $_COOKIE['cookiMan'] ;


?>

<hr>
<b><u>Il ne peux pas l'ouvrire car c'est dans un sous-dossier</u></b>
<?php
$calc = new calcletricev2() ;
$calc->gethtml();
?>