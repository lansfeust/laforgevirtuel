<?php

// session_start();
//  require 'MaCalculatrice.php' ;

class calcletricev2 extends MaCalculatrice {
    
    function __construct()
    {
        $this -> getreception(); //regarde l'url pour voir si il y a des nb a recupérer 
        
        $this->total = $this -> calcule() ;// teste si c'est une addition ou une soustraction est fait le calcule , le return
        $this -> affTotal( $this->total ) ;// affiche dans le formulaire la réponse  en la placant dans une session 
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
                
                    case 'multiplication':
                      return  $this->multiplication($this ->nb1 , $this ->nb2);
                        break ;
                
                        case 'division':
                          return  $this->division($this ->nb1 , $this ->nb2);
                            break ;
        }
    }

    protected  function multiplication ( $nb1  , $nb2 )
    {
        $total = $nb1 * $nb2 ;
        return $total ;
    }

    protected  function division ( $nb1  , $nb2 )
    {
        $total = $nb1 / $nb2 ;
        return $total ;
    }

    public function affTotal ($var)
    {
        if ( isset($_GET["boutton"]) ){ 

//            new moncookies('affTotal',$this->total,0) ;

        $var = <<<EOD
        <form action="" method="get">
            <div class="form-group">
            <h1>$this->total</h1>
            <button type="reload" class="btn btn-primary" name="boutton" value="addition">Additionner</button>
            <button type="submit" class="btn btn-danger" name="boutton" value="soustraction">Soustraire</button>
            <button type="submit" class="btn btn-primary" name="boutton" value="multiplication">multiplication</button>
            <button type="submit" class="btn btn-danger" name="boutton" value="division">division</button>
            </div>
EOD;
    } ;
        $_SESSION['affTotal']= $var ;}
}

