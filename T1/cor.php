<?php

$cor = "vermelho";

switch($cor):
    case"vermelho":
    echo"Sua cor preferida é vermelho";
    break;

    case"amarelo":
    echo"Sua cor preferida é amarelo";
    break;
    
    case"azul":
    echo"Sua cor preferida é azul";
    break;

    default:
    echo "Sua cor preferida não é vermelho, amarelo e nem azul";
endswitch;