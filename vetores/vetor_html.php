<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <pre>

        <?php
$dados = array(
    1,
    2,
    3
);

echo var_dump($dados);

$dados[] = "Teste";
$dados[] = false;

echo var_dump($dados);
        ?>

    </pre>
</div>
</body>
</html>