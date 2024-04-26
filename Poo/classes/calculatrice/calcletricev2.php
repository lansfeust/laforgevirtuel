<?php

// session_start();
//  require 'MaCalculatrice.php' ;

class calcletricev2 extends MaCalculatrice {


    public function getreception ( )
    {
        
        include 'calculatrice.html' ;// a deplacer 
        if ( isset($_GET["boutton"]) ){ 
            
            $this ->nb1 = $_GET["number1"];
            $this ->nb2 = $_GET["number2"];
            $this ->boutton = $_GET["boutton"];

            $this-> calculeFille() ;
        }}

    private function calculeFille()    
    {   
        $this-> calcule() ;
    }

    public function affTotal ()
    {        
        echo '<h1>heeeee hooooo !';//efface-moi
        if ( isset($_GET["boutton"]) ){ 

//            new moncookies('affTotal',$this->total,0) ;

        } ;
        $var = 'bleurg' ; //efface-moi
        $values = <<<'EOD'
        <form action="" method="get">
            <div class="form-group">
            <button type="reload" class="btn btn-primary" name="boutton" value="addition">Additionner</button>
            <button type="submit" class="btn btn-danger" name="boutton" value="soustraction">Soustraire</button>
            <button type="submit" class="btn btn-primary" name="boutton" value="multiplication">multiplication</button>
            <button type="submit" class="btn btn-danger" name="boutton" value="division">division</button>
            </div>
EOD;
    
//        $_SESSION['affTotal']= $this->$values ;}
        $_SESSION['affTotal']= $var ;}
//        $_SESSION['affTotal']= $this->total ;
}

