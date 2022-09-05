<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar um valor acima do seu saldo");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '123.456.789-10' => ['titular' => 'Lucas', 'saldo' => 1000],
    '123.456.789-20' => ['titular' => 'Jorge', 'saldo' => 300],
    '123.456.789-30' => ['titular' => 'Maria', 'saldo' => 2000]
];

$contasCorrentes['123.456.789-30'] = sacar($contasCorrentes['123.456.789-30'], 500);
$contasCorrentes['123.456.789-20'] = sacar($contasCorrentes['123.456.789-20'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
