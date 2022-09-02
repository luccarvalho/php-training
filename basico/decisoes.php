<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar, se tiver 18 anos. ";
echo "Ou se tiver a partir de 16 anos e estiver acompanhado(a)." . PHP_EOL;

if($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar";

} else if($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a). Pode entrar";

} else {
    echo "Você só tem $idade anos. Não pode entrar";
}
