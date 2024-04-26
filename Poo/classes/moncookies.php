<?php
class moncookies {

    public function __construct ( $name , $value , $expires_or_options=null ) {

        switch ($expires_or_options) 
        {
            case null :
                $exipre = time()+60 ;
                break;
            
                case 0 :
                    $exipre = time() ;
                    break;
            
            
                    case  1 :
                        $exipre = time()+(60*60) ;
                        break;
         
            
                        case 2 :
                            $exipre = time()+(60*60*24) ;
                            break;
         
            
                            case 3 :
                                $exipre = time()+(60*60*24)*30 ;
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