<?php

function verificar($v){
    
    if($v%2==0){
        echo "O numero é $v e é par </br>";
    }
    else{
        echo "O numero é $v e é impar </br>";
    }

    $s = 1;

for($contador = $v ; $contador >= 1; $contador--){
    $s = $s*$contador;
    }

echo "O vatorial é $s";
}

echo verificar(9);

?>
