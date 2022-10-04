<?php

$email = 'lucas@gmail.com';
$senha = '123';

// strlen: string lenght, informa o tamanho de uma string.
echo strlen($senha) . PHP_EOL;

// strpos: string position, busca a posição de um caracter dentro de uma string.
$posicaoDoArroba = strpos($email, '@');

// substr: pega uma string dentro de outra string, colocando de onde o pedaço de string vai ser
// retirado e colocando a posição onde inicia e a posição onde termina todos os caracteres que serão retirados.
echo substr($email, 0, $posicaoDoArroba) . PHP_EOL;

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
