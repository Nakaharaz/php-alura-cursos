<?php

$peso = 75;
$altura = 1.64;
$imc = $peso / ($altura * $altura);
$imcFormatado = number_format((float)$imc, 2, '.', '');

if ( $imcFormatado < 18.5 ) {
    echo "Seu IMC é $imcFormatado, você está classificado na categoria MAGREZA" . PHP_EOL;
} else if ( $imcFormatado > 18.5 && $imcFormatado < 24.9) {
    echo "Seu IMC é $imcFormatado, você está classificado na categoria NORMAL" . PHP_EOL;
} else {
    echo "Seu IMC é $imcFormatado, você está classificado na categoria SOBREPESO / OBESIDADE" . PHP_EOL;
}