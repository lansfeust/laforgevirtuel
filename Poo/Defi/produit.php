produit.php
<?php

class produit {
    // Les attributs
    public $id_produit ;
    public $nom ;
    public $prixHt ;
    const TVA = 20 ;

    public function afficherPrixTTC($produit=13)
    {
        $total = $this -> prixHt +( $this -> prixHt * self :: TVA /100 ) ;
        return $total ;
    }

    public function getprixHt($valeur)
    {
        $this->prixHt = $valeur ;
    }
    public function getnom($valeur)
    {
        $this->nom = $valeur ;
    }
    public function getattributs($id_produit,$nom,$prixHt)
    {
        $this->id_produit = $id_produit ;
        $this->nom = $nom ;
        $this->prixHt = $prixHt ;
    }


}

$objet = new produit ;
echo $objet ->getattributs(8,'ballon',19.19);

echo $objet::TVA ;
echo '<pre><h1>'. $objet ->afficherPrixTTC().'</h1><pre>' ;
?>
<hr>


<?php
class MyClass {
    const CONST_VALUE = 'Une valeur constante';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;
?>

<?php
class OtherClass extends MyClass
{
//    public static $my_static = 'variable statique';
        const my_static = '<h1>variable statique</h1>';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

//OtherClass::doubleColon();
?>
