<?php
session_start();
include('../moncookies.php');

require_once('MaCalculatrice.php') ;
require_once('calcletricev2.php') ;
$tableau = array('jacks','sparow');

$personne = new calcletricev2() ;
$personne->gethtml();

?>