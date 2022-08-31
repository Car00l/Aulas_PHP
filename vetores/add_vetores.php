<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>vetores</title>
</head>

<body>

<pre>
<?php

$vetor = array(
    1,
    2,
    3
);

echo "<h3>Add no Final</h3>";

echo var_dump($vetor);

$vetor[] = 6;
$vetor[] = "Teste"; //add uma nova informação no final

echo var_dump($vetor);
?>

<?php

$vetor = [
    "Naruto",
    "One Piece",
    "Dragon Ball"
];

echo "<h3>Add no Começo</h3>";

echo var_dump($vetor);

array_unshift($vetor, "One Puch Man"); //add uma nova informação no começo

echo var_dump($vetor);
?>

</pre>
</body>
</html>
