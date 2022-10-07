<?php

// strings numéricas são entendidas pelo PHP e permitem cálculos matemáticos.
$anoNascimento = '1982';

$idade = 2022 - $anoNascimento;

echo $idade . PHP_EOL;

// comparações com igual (==): tenta fazer conversões, verifica se a variável é uma string númerica, caso sim, converte para um número e compara. 
// o if abaixo vai dar SIM.
if ($anoNascimento == 1982) {
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}

// comparações com idêntico (===): verifica se os valores e os tipos são iguais, se não forem de tipos iguais, o valor nem é verificado.
// o if abaixo vai dar NÃO.
if ($anoNascimento === 1982) {
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}
