<?php

$montableau = array("jean","paul",'pierre',"michel" ,"helene",'sandrine','christel','isabelle','evariste');

$monteste = ["jean","paul",'pierre',"michel" ,"helene",'sandrine','christel','isabelle','evariste'] ;


print_r($montableau);

echo '<ul>' ;
foreach ( $montableau as $key => $puce ) {

echo '<li>'.$puce .'</li>';

}
echo '</ul>' ;
echo '$monteste et : '. gettype($monteste) ;
echo '<hr>$montableau et : '. gettype($montableau) ;

?>