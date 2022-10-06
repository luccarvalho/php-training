<?php

$csv = ',.Lucas Carvalho,39.,';

// trim: apara/deleta espaços vazios das extremidades de strings
// ou apara/deleta os caracteres informados por parâmetro das extremidades das strings.
echo trim($csv, ',.') . PHP_EOL;

// ltrim: apara/deleta caracteres selecionados do início da string, extremidade esquerda.
echo ltrim($csv, ',.') . PHP_EOL;

// rtrim: apara/deleta caracteres selecionados do fim da string, extremidade direita.
echo rtrim($csv, ',.') . PHP_EOL;
