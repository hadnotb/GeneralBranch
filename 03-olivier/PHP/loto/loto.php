<?php



// var_dump(random_int(1, 49));
$tirage = [];

for ($i = 0 ; $i<6 ; $i++)
{
    do
    {
        $random = random_int(1, 49);
      
    }
    while(in_array($random,$tirage));

    $tirage[] = $random ;

}
var_dump($random);




// Correctionnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn

Function loto ()
{
    $tirage = [];
    while(count($tirage)<6)
    {
        $rand = rand(1,49);
        if(in_array($rand,$tirage))
        {
            continue ;
        }
        $tirage[]=$rand;
    }
    sort($tirage);
    return $tirage ;
}
$tirage = loto();


include "loto.phtml";