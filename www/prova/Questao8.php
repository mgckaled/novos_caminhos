<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 8');

PHPClassSession('QUESTÃO 8', __LINE__);

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando 'n' = 261534 qual deve ser o valor de retorno da função ? true ou false ?";

function isLucky($n)
{
    // tranformar o número inteiro em uma array
    $arr = array_map('intval', str_split($n)); 

    // dividir a array em 2 partes iguais, com o mesmo número de elementos
    list($arr1, $arr2) = array_chunk($arr, ceil(count($arr) / 2));
    
    // Checar se a soma dos elementos das arrays divididas são iguais.
    if ( array_sum($arr1) == array_sum($arr2) ) {
        return true;
    } else {
        return false;
    }
}
var_dump(isLucky(261534));
var_dump(isLucky(1230));
var_dump(isLucky(239017));
var_dump(isLucky(261534));
var_dump(isLucky(123303));