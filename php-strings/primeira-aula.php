<?php

$nome = 'Lucas Carvalho';

// str_contains: verifica se uma string existe dentro de outra string
$minhaFamilia = str_contains($nome, 'Carvalho');

if ($minhaFamilia) {
    echo "$nome é da minha família." . PHP_EOL;
} else {
    echo "$nome não é da minha família." . PHP_EOL;
}
