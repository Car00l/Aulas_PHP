<?php

function verificar($v1, $v2){

if($v1>$v2){
    for($contador = $v1; $contador>$v2; $contador--){
        if($contador%2!=0){
            echo $contador . "</br>";
        }
    }
}

else{
    for($contador = $v2; $contador>$v1; $contador--){
        if($contador%2!=0){
            echo $contador . "</br>";
        }
    }
}
}

echo verificar(6, 60);

?>

