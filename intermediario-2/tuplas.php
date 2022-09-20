<?php

$dados = [
    'nome' => 'Lucas',
    'nota' => 10,
    'idade' => 25,
];

// Função list menos verbosa.
//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;

// extract= pega as chaves de um array e cria variáveis dessas chaves.
extract($dados);

var_dump($nome, $nota, $idade);

// compact= pega várias variáveis e cria um array.
var_dump(compact('nome', 'nota', 'idade'));
