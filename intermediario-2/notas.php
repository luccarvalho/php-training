<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

// array_key_exists = Verifica se uma chave (índice) existe no array
echo 'Vinicius fez a prova?' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));

// isset = Verifica se uma chave (índice) existe no array e se o valor dela não é nulo
echo 'Vinicius fez a prova?' . PHP_EOL;
var_dump(isset($notas['Vinicius']));

// isset = Verifica se um valor existe no array
echo 'Alguém tirou nota 10?' . PHP_EOL;
var_dump(in_array(10, $notas, strict: true)); // strict = faz uma comparação mais rigorosa

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas, strict: true);
