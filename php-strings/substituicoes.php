<?php

$texto = 'Texto com qualquer coisa, poxa que caramba';

// str_replace: função que substitui o conteúdo de uma string, passando 3 parâmetros.
// 1° parâmetro: o que quer substituir? - 2° parâmetro: pelo que quer substituir? - 3° parâmetro: de onde quer buscar?
echo str_replace(['poxa', 'caramba'], ['p**', 'c**'], $texto) . PHP_EOL;


// strtr: função que traduz caracteres para caracteres, passando 2 parâmetros.
// 1° parâmetro: de onde quer substituir? - 2° parâmetro: o que quer substituir? - 3° parâmetro: pelo que quer substituir?
echo strtr($texto, 'poxa', '***');
