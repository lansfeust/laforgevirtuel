<?php

session_start();
require 'MaCalculatrice.php' ;

class calcletricev2 extends MaCalculatrice {



    private function affTotal ()
    {        
        if ( isset($_GET["boutton"]) ){ 

            new moncookies('affTotal',$this->total,0) ;

            $_SESSION['affTotal']= $this->total ;
        } ;
        $values = <<<'EOD'
        Exemple de chaîne sur plusieurs lignes en utilisant la syntaxe Nowdoc.
        Les barre oblique inversée sont toujours traité de façon littérale,
        par exemple \\ and \'.
        EOD;
    }
}


$personne = new calcletricev2() ;
$personne ->getreception();
echo $personne ->marcher();
//echo '<h1>'.$_SESSION['lol'].'</h1>';

include 'calculatrice.html' ;
?>
        <div class="container mt-5">
        <form action="" method="get">
            <div class="form-group">
            <button type="reload" class="btn btn-primary" name="boutton" value="addition">Additionner</button>
            <button type="submit" class="btn btn-danger" name="boutton" value="soustraction">Soustraire</button>
            <button type="submit" class="btn btn-primary" name="boutton" value="multiplication">multiplication</button>
            <button type="submit" class="btn btn-danger" name="boutton" value="division">division</button>
            </div>
            <div class="form-group">
                <?php //echo $personne ->affTotal(); ?>
                <?php // echo $_COOKIE['leNom'] ?>
                
                <?php// echo '$_SESSION["affTotal"]'. $_SESSION['affTotal'] ?>
            </div>
        </form>
    </div>