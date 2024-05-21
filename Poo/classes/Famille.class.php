<?php
/*# -----------------------------------------------
#		    Zone des 'imports' de bibliotheques
# -----------------------------------------------*/
include('Poo\classes\aff.php');

/*# -------------------------------------------------------
#		Zone de déclaration des modules ou des fonctions
# -------------------------------------------------------*/

/*# -------------------------------------------------------
#						PROGRAMME
# -------------------------------------------------------*/
 class Famille    {
    private  $bdd = True ;
    private  $var = 'ivi' ;

    public function __construct( $var = null) {
        
        $aff = new aff(); // affiche mieux les variables (code personnel ); //Efface-moi

        $this->verif( $var ) ;
        $this-> var = $this->connection( $var ) ;
        $this-> var = $this->creation( $var ) ;
    }

    private function creation( $var ) {
        $requete = "CREATE TABLE IF NOT EXISTS famille (
            idFamille INTEGER PRIMARY KEY,
            NomFamille TEXT NOT NULL
        )";
        
        $this-> var  ->exec($requete);

        return  $this-> var   ;
    }

    private function connection( $var ) {

        $bdd = new SQLite3( $var );
        return  $bdd  ;
    }
    
    private function setfamille(){
        
    }

    private function verif( $var = null ) {

        $verif = isset( $var );

        if ( $verif ) {
            return True ;
        }else {
            
            $_SESSION = [] ;
            echo '<META HTTP-EQUIV="Refresh" CONTENT="1; ">' ; // Actualisation de la page
            exit() ;
            return False ;

        }
    }

    public function getBdd() {

        $aff = new aff(); // affiche mieux les variables (code personnel ); //Efface-moi
        $results = $this-> var ->query( 'SELECT * FROM famille' );
        
        while ( $var = $results -> fetchArray(SQLITE3_ASSOC) ) {
            $affichage[] = $var ;
            $aff->f( $affichage ) ;
        };

        $aff->a( $results ) ;
        $aff->a( $this-> var ) ;

        return $affichage ;
        
    }

 }

?>