<?php
class moncookies {

    public function __construct ( $name , $value , $expires_or_options=null ) {

        switch ($expires_or_options) 
        {
            case null :
                $exipre = time()+60 ; // Temps actuel + 1 minutes
                break;
            
                case 0 :
                    $exipre = time() ; // Temps actuel + 1 minutes
                    break;
            
            
                    case  1 :
                        $exipre = time()+(60*60) ; // Temps actuel + 1 heurs
                        break;
         
            
                        case 2 :
                            $exipre = time()+(60*60*24) ; // Temps actuel + 1 journées
                            break;
         
            
                            case 3 :
                                $exipre = time()+(60*60*24)*30 ; // Temps actuel + 1 moi
                                break;

                                default :
                                    break;

            
            case null :
                $exipre = time()+60 ;
            
                                       
        }
        setcookie(
            $name ,
            $value ,
            $expires_or_options = 0,
            $path = "/",
            $domain = "",
            $secure = false,
            $httponly = false 
        ) ;

    }
    

}


?>