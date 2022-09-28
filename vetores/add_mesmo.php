<?php

// Faça um programa com um vetor vazio, e adicione 6 filmes ao vetor atravez de uma função. Use tambem uma função para mostrar os dados do vetor


function adicionar ($nome) {
    $filmes=[];
    array_push($filmes, $nome);
    echo var_dump($filmes);
}

echo adicionar ('filme');
?>

