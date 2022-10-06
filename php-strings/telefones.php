<?php

$telefones = ['(11)8888-8888', '(21)99999-9999', '(24)77777-7777'];

// implode: uni um array em uma string, passando dois parâmetros.
// o primeiro parâmetro é a string que vai unir o array (espaço, virgula, etc).
// o segundo parâmetro é a variável que contém o array.
echo implode(PHP_EOL, $telefones);
