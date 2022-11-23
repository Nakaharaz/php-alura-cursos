<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos, ou a partir de 16 anos se estiver acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem mais de 16 anos e está acompanhado(a)! Pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
};

echo PHP_EOL;
echo "Adeus!";
