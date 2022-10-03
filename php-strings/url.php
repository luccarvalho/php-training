<?php

$url = 'https://alura.com.br/';

// str_starts_with: informa se uma string inicia com uma determinada palavra.
if (str_starts_with($url, 'https')) {
    echo 'É uma url segura!';
} else {
    echo 'Não é uma url segura!';
}

echo PHP_EOL;

// str_ends_with: informa se uma string termina com uma determinada palavra.
if (str_ends_with($url, 'br')) {
    echo 'É um domínio do Brasil!';
} else {
    echo 'Não é um domínio do Brasil!';
}
