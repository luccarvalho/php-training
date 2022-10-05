<?php

$nome = 'Lucas Carvalho';
$email = 'lúcas@gmail.com';
$senha = 'áúíã';

// strlen: string lenght, informa o tamanho de uma string em bytes.
// mb_strlen: string lenght, informa o tamanho de uma string em multi-bytes.
echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

// strpos: string position, busca a posição de um caracter dentro de uma string.
$posicaoDoArroba = strpos($email, '@');

// substr: pega uma string dentro de outra string, colocando de onde o pedaço de string vai ser
// retirado e colocando a posição onde inicia e a posição onde termina todos os caracteres que serão retirados.
$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

// explode: separa o conteúdo de uma string e retorna um array, utilizando dois parâmetros.
// o primeiro parâmetro é o que vai ser utilizado como separador, e o segundo é a string que vai ser separada.
var_dump(explode(' ', $nome));

// exemplo de utilização da função explode, utilizando a virgula como separador de string:
$csv = 'Lucas Carvalho,39,lucas@gmail.com';
var_dump(explode(',', $csv));
