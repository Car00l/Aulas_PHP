<?php

// Faça um programa que tenha dois vetores numericos de 3 posições cada, e um terceiro vetor vazio. De acordo com uma operação escolhida (+,-,*,/), faça o calculo entre os valores de 1° com o 2° vetor, e preeencha o 3° vetor, e mostre os três vetores

$vetor1 = [1, 2, 3];
$vetor2 = [4, 5, 6];
$vetor = [];

$operacao = "+";

for ($contador = 0; $contador < count($vetor1); $contador++) {

    switch ($operacao) {
        case '+':
            $vetor[] = $vetor1[$contador] + $vetor2[$contador];
            break;
        case '-':
            $vetor[] = $vetor1[$contador] - $vetor2[$contador];
            break;
        case '*':
            $vetor[] = $vetor1[$contador] * $vetor2[$contador];
            break;
        case '/':
            $vetor[] = $vetor1[$contador] / $vetor2[$contador];
            break;
}
}

echo var_dump($vetor1) . "</br>";
echo var_dump($vetor2) . "</br>";
echo var_dump($vetor) . "</br>";

?>