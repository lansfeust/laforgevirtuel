<?php
spl_autoload_register(function($class){
    require_once('classes/calculatrice/'.$class.'.php');
});


?>