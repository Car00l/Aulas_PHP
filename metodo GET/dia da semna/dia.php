<?php

/* Faça um programa que leia um dia da semana via formulario (1 a 7), e mostrar se é dia de ir pra escola ou não */

$dia = $_GET ['dia'];

switch($dia){
    case 1: 
        echo "Hoje é segunda, dia de ir pra escola";
        break; 
    case 2: 
        echo "Hoje é terça, dia de ir pra escola";
        break;
    case 3: 
        echo "Hoje é quarta, dia de ir pra escola";
        break;
    case 4: 
        echo "Hoje é quinta, dia de ir pra escola";
        break;
    case 5: 
        echo "Hoje é sexta, dia de ir pra escola";
        break;
    case 6: 
        echo "Hoje é sabado, dia de não ir pra escola";
        break;            
    default: 
        echo "Hoje é domingo, dia de não ir pra escola";
        break;   
}
?>
