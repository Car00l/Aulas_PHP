<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>vetores</title>
</head>

<body>

<pre>
<?php

$vetor = [
    "Naruto",
    "One Piece",
    "Dragon Ball"
];

echo var_dump($vetor);

array_unshift($vetor, "One Puch Man"); //add uma nova informação no começo

echo var_dump($vetor);
?>

</pre>
</body>
</html>