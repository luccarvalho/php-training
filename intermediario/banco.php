<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => ['titular' => 'Lucas', 'saldo' => 1000],
    '123.456.789-20' => ['titular' => 'Jorge', 'saldo' => 300],
    '123.456.789-30' => ['titular' => 'Maria', 'saldo' => 2000]
];

$contasCorrentes['123.456.789-30'] = sacar($contasCorrentes['123.456.789-30'], 500);
$contasCorrentes['123.456.789-20'] = sacar($contasCorrentes['123.456.789-20'], 100);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 700);

// Testando a função unset, que remove uma variável da memória.
unset($contasCorrentes['123.456.789-20']);

titularComLetrasMaisculas($contasCorrentes['123.456.789-10']);
?>

<!-- Fechando código PHP. Tudo escrito a partir desse trecho, será interpretado como texto (HTML). -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste HTML no PHP</title>
</head>

<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>

</html>