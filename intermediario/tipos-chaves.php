<?php

// Exemplo para demostrar como o PHP só aceita números inteiros ou strings nas chaves (índice) em arrays associativos.
// Uma string representada como valor numérico (exemplo '1') será convertida para um valor inteiro.
// Um tipo decimal ou float (exemplo 1.5) será convertida para um valor inteiro. (Nesse caso, vira 1).
// Valores booleanos são convertidos para inteiro (true = 1, false = 0).
// No exemplo abaixo, todos as chaves (índices) serão convertidos para o número 1, sobrescrevendo o código.

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}
