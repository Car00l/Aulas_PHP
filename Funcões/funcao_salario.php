<?php

function verificar($porcentagem, $salario){

    $aumento = ($salario*$porcentagem)/100;
    $salarionovo = $salario+$aumento;

    echo "O salario antigo é $salario <br/>
    A porcentagem de aumento é de $porcentagem% <br/>
    O aumento é de $aumento <br/>
    O novo salario é $salarionovo";
}

echo verificar(50,1000);
?>