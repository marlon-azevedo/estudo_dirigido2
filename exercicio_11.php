<?php

print "digite um número entre 0-1000: \n";
$Numero= fgets(STDIN);

$qtnumero= $Numero;

if ($qtnumero=3){

    $centena=(int)($Numero/100)%100;
    $dezena= (int)($Numero/10)%10;
    $unidade=(int)($Numero%100)%10;

    print "$Numero tem:\n";
    print "$centena centenas\n"; 
    print "$dezena dezenas\n" ;
    print "$unidade unidades\n ";
  

}

