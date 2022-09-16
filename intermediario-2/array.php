<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

foreach ($array as $numeral => $nomeDoNumero) {
    echo "$numeral em português é: $nomeDoNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;
