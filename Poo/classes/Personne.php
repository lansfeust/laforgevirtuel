<?php

class Personne {
    
    // crèation des attributs de l'objet
    public $nom ;
    public $prenom ;
    public $age ;

    // crèation des methodes
    public function parler ()
    {
         return 'je parle <hr>' ;
    }
    
    public function manger ()
    {
        return 'je mange';
    }

    public function marcher ()
    {
        return 'je marche';
    }


}
/* 
$personne = new Personne() ;
$personne ->nom = 'ndaw' ;
$personne -> prenom = 'laurent' ;
$personne -> age = 35 ;
echo $personne ->parler();

var_dump($personne);
echo '<hr>';
print_r($personne); */
?>


