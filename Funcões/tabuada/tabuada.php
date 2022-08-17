<?php

$operador = "*";

require "funcao_tabuada";

if($operador == "*"){
    echo tabuada(9);
}
else{
    echo "Operador invalido";
}

echo tabuada(2);

switch ($operador){
    case '*':
        echo tabuada(4);
        break;
    default:
        echo "Operador invalido";
        break;
}
?>