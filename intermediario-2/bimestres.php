<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    //'Vinicius' => 6,
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    //'Maria' => 10,
];

// array_diff: retorna um novo array com todos os elementos que estão no primeiro parâmetro e
// que não estão no segundo parâmetro. Mas só leva em consideração o valor dos arrays.
// var_dump(array_diff($notasBimestre1, $notasBimestre2));

// array_diff_key: tem a mesma função do array_diff. Mas leva em consideração as chaves dos arrays.
// var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// array_diff_assoc: usa a associação para comparar, compara tanto as chaves quanto os valores dos arrays.
// var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));


$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

// array_combine e array_flip: invertem a ordem nos arrays, o que é chave vira valor e o que é valor vira chave.
var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));
