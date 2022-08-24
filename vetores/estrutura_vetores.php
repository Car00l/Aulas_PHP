<!-- VETORE EM PHP
Vetors em php são conhecidos como array, ou seja, são coleções de dados.
Array são considerados tipos de dados, assim como os tipos string, float, integer, double, booleam, etc. 
Na linguagem php, assim como em outras linguagens, os vetores podem conter muitas posições, e tambem podem conter tipos diferentes de dados, sendo cada posição independente das outras de certa forma. -->

<?php

$vetor = array(1, 5, 7, 19, 24);

echo var_dump($vetor) ."</br>"; //função que exibe a estrutura completa de um vetor

?>

<?php

$vetor = [1, 10.5, "Maria", "A", true]; // nao precisa criar a função array

echo print_r($vetor) ."</br>"; // nao mostrar o tipo da variavel

echo var_dump($vetor) ."</br>"; // mostra o vetor completo

?>

<?php

$cores = array(
    "azul",
    "amarelo",
    "vermelho",
    "roxo",
    "rosa"
);

echo var_dump($cores) ."</br>";
?>

<?php

$dados = [
    "Nome" => "Camilly",
    "Rua" => "Dos Gigantes",
    "Numero" => 80,
    "Cidade" => "Itu",
    "Estado" => "São Paulo"
];

echo var_dump($dados) ."</br>";
?>

<?php

$vetor = array(
    1,
    "Arthur",
    10.6,
    "Pastel de Flango",
    4,
    10,
    12,
    "Rua A",
);

echo var_dump($vetor) ."</br>";
echo "A quantidade de posições é " .count($vetor);
?>

