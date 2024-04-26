<?php
//  session_start();
include('../moncookies.php');

class MaCalculatrice {
    
    // crèation des attributs de l'objet
    private $nb1 ;
    private $nb2 ;
    private $total ;
    private $boutton ;

    // crèation des methodes
    
    public function marcher ()
    {
        return 'je marche';
    }

    public function getreception ( )
    {
        if ( isset($_GET["boutton"]) ){ 
            
            $this ->nb1 = $_GET["number1"];
            $this ->nb2 = $_GET["number2"];
            $this ->boutton = $_GET["boutton"];

            $this-> calcule() ;
        }
        
        
    }

    private function calcule ()
    {
        if ($this->boutton = 'addition'){
            $this->addition();
        }
        elseif  ($this->boutton = 'soustraction')
        {
            $this->soustraction();
        }
        
    }
    
    private function addition ()
    {
        $total = $this ->nb1 + $this ->nb2 ;
        $this->total = $total ;
        $this->affTotal(  );
    }

    private function soustraction ()
    {
        $total = $this ->nb1 - $this ->nb2 ;
        $this->total = $total ;
        $this->affTotal(  );
    }

    private function affTotal ()
    {
        
        if ( isset($_GET["boutton"]) ){ 

            new moncookies('affTotal',$this->total,0) ;

            $_SESSION['affTotal']= $this->total ;
        }
    }

}

//  include 'calculatrice.html' ;
/* 
$personne = new MaCalculatrice() ;
$personne ->getreception();
?>
<?php echo $personne ->affTotal(); ?> */