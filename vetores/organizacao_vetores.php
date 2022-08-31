<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>vetores</title>
</head>

<body>

<pre>
    
<?php

echo "<h3>Add no Final</h3>";

$vetor = array(
    1,
    2,
    3
);


echo var_dump($vetor);

 //formas de add uma nova informação no final
$vetor[] = 6;
array_push($vetor, "Hello World");

echo var_dump($vetor);
?>

<?php

echo "<h3>Add no Começo</h3>";

$vetor = [
    "Naruto",
    "One Piece",
    "Dragon Ball"
];


echo var_dump($vetor);

//add uma nova informação no começo
array_unshift($vetor, "One Puch Man"); 

echo var_dump($vetor);
?>

<?php

$vetor = [
    "Carlos",
    "Ana",
    "Maria",
    "Wesley",
    "Gabriel"
];

echo var_dump($vetor);

echo "<h3>Ordem crescente</h3>";
asort($vetor); //ordena em ordem crescente
echo var_dump($vetor);

echo "<h3>Ordem decrescente</h3>";
rsort($vetor); //ordena em ordem decrescente
echo var_dump($vetor);
?>

<?php

$vetor = [
    "nome" => "Emanuela",
    "rua" => "rua dos 7 anões",
    "peso" => "meio quilo",
    "cidade" => "Itu"
];

echo var_dump($vetor);

echo "<h3>Ordem decrescente</h3>";
ksort($vetor); //ordena pela quant de letras
var_dump($vetor);

echo "<h3>Ordem crescente</h3>";
krsort($vetor); 
var_dump($vetor);

?>

<?php

echo "<h3>Elimina valores repetidos</h3>";

$vetor = array(
    "bob",
    13,
    "bob",
    "maria",
    33,
    false
);

echo var_dump($vetor);

$vetor = array_unique($vetor); //elimina valores duplicados
echo var_dump($vetor);

?>

<?php

$frutas = ["maça", "laranja", "limão"];
$legumes = ["batata", "abobora", "cenoura"];

$alimentos = array_merge($legumes, $frutas); //mistura dois ou mais vetores

echo var_dump($frutas);
echo var_dump($legumes);

echo "<h3>Mistura as duas tabelas</h3>";
echo var_dump($alimentos);
?>

<?php

$frutas = ["maça", "laranja", "limão"];
$legumes = ["batata", "abobora", "cenoura"];

foreach($alimentos as $novo){//percorre todas as possições do vetor
    echo "<p>$novo</p></br>";
}
?>
</pre>
</body>
</html>
