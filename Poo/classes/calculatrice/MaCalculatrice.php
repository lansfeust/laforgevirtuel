<?php
//  session_start();
//  include('../moncookies.php');

class MaCalculatrice {
    
    // crèation des attributs de l'objet
    protected $nb1 ;
    protected $nb2 ;
    public $total ;
    protected $boutton ;

    // crèation des methodes
    function __construct()
    {
        $this -> getreception(); //regarde l'url pour voir si il y a des nb a recupérer 
        
        $this->total = $this -> calcule() ;// teste si c'est une addition ou une soustraction est fait le calcule , le return
        $this -> affTotal( $this->total ) ;// affiche dans le formulaire la réponse  en la placant dans une session 
    }
    
    public function marcher ()
    {
        return 'je marche';
    }

    protected function getreception ( )
    {   
        if ( isset($_GET["boutton"]) ){ 
            
            $this ->nb1 = $_GET["number1"];
            $this ->nb2 = $_GET["number2"];
            $this ->boutton = $_GET["boutton"];
            return ;
        }
    }

    protected  function calcule ()
    {
        switch ( $this->boutton  ){

            case 'addition':
               return  $this->addition($this ->nb1 , $this ->nb2);
                break ;
                
                case 'soustraction':
                  return  $this->soustraction($this ->nb1 , $this ->nb2);
                    break ;
        }
    }
    
    protected  function addition ( $nb1  , $nb2 )
    {
        $total = $nb1 + $nb2 ;
        return $total ;
    }
    protected  function soustraction ( $nb1  , $nb2 )
    {
        $total = $nb1 - $nb2 ;
        return $total ;
    }

    protected  function affTotal ( $var )
    {
        if ( isset($_GET["boutton"]) ){ 

            new moncookies('affTotal',$var,0) ;

            $_SESSION['affTotal']= $var ;
        }
    }
    public function sethtml(){
        include 'calculatrice.html' ;
    }

}

//  include 'calculatrice.html' ;
/* 
$personne = new MaCalculatrice() ;
$personne ->getreception();
?>
<?php echo $personne ->affTotal(); ?> */