<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'kilderson',
    'Daiane',
];

// array_merge: une os elementos de um ou mais arrays.
//$alunos2022 = array_merge($alunos2021, $novosAlunos);

// o operador (...) desempacota o conteúdo de um array, deixando cada elemento de um array sendo utilizado individualmente.
$alunos2022 = [...$alunos2021, 'Lucas Carvalho', ...$novosAlunos];

// Adicionando elementos em um array que já existe.
array_push($alunos2022, 'Rodrigo', 'Alice', 'Julia');

// Adicionando um elemento.
$alunos2022[] = 'Luiz';

// Adicionando elementos no ínicio de um array.
array_unshift($alunos2022, 'Rafaela', 'Douglas');

// array_shift: seleciona o primeiro elemento de um array e o remove.
echo array_shift($alunos2022) . PHP_EOL;

// array_pop: seleciona o último elemento de um array e o remove.
echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);
