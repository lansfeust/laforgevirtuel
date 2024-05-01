<?php

abstract class Animal{
    public $var ;

    public function manger()
    {
        return 'je mange' ;
    }

    public function dormir()
    {
        return 'je dort' ;
    }


    public function quiJeSuis()
    {
        echo '<h1><pre>';
        print_r($this) ;
        echo '</pre></h1>';
        return ;
    }
}


class Chient extends  Animal{

    public function __construct(){
        echo '<h1>coucou</h1><hr>';
    }

    public function aboyer()
    {
        return 'je fais chier mon monde' ;
    }

}

$chient = new Chient();
echo $chient -> dormir();
$chient -> quiJeSuis();

?>