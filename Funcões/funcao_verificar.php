<?php

function verificar($v){
    if($v>0){
        echo "O numero é $v e é positivo";
    }
    elseif($v<0){
        echo "O numero é $v e é negativo";
    }
    elseif($v==0){
        echo "O numero é zero";
    }
    else{
        echo "O numero é invalido";
    }
}

echo verificar(6);

?>