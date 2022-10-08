<?php

// heredoc (<<<): sintaxe que remove toda a identação de uma string e permite interpolação de variáveis, é equivalente a aspas duplas.
// nowdoc (<<< + aspas simples): sintaxe que remove toda a identação de uma string, mas não permite interpolação de variáveis, é equivalente a aspas simples.
function geraEmail(string $nome): void
{
    $conteudoEmail = <<<final
    'Olá, $nome!
        
    Estamos entrando em contato para
    {motivo do contato}
        
    {assinatura}';

    final;

    echo $conteudoEmail;
}

geraEmail('Lucas Carvalho');
