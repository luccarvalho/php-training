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

titularComLetrasMaisculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf $titular $saldo");
}
