<?php
//  session_start();
//  include('../moncookies.php');

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
        
        include 'calculatrice.html' ;
        if ( isset($_GET["boutton"]) ){ 
            
            $this ->nb1 = $_GET["number1"];
            $this ->nb2 = $_GET["number2"];
            $this ->boutton = $_GET["boutton"];

            $this-> calcule() ;
        }
        
        
    }

    protected  function calcule ()
    {
        if ($this->boutton == 'addition'){
            $this->addition();
        }
        elseif  ($this->boutton == 'soustraction')
        {
            $this->soustraction();
        }
        
    }
    
    protected  function addition ()
    {
        echo '<h1>heeeee hooooo ya quelqu un ?!</h1>';//efface-moi
        $total = $this ->nb1 + $this ->nb2 ;
        $this->total = $total ;
        $this->affTotal(  );
    }

    protected  function soustraction ()
    {
        $total = $this ->nb1 - $this ->nb2 ;
        $this->total = $total ;
        $this->affTotal(  );
    }

    protected  function affTotal ()
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