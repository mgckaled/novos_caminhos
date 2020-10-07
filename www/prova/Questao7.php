<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 7');

PHPClassSession('QUESTÃO 7', __LINE__);

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

echo 'Considerando a solução desenvolvida por você, para o enunciado abaixo quando as variáveis possuem os valores $s1 = "zzzz" e $s2 = "zzzzzzz", qual deve ser o valor de retorno da função ? ';

function commonCharacterCount($s1, $s2)
{
    $count = 0;
    for ($i=0; $i < strlen($s1); $i++) {
        if (stripos($s2, $s1) > -1) {
            $count++;
            $s2 = str_replace("",$s2,$s1);
        }
    }
    return $count;
}

$s1 = "zzzz";
$s2 = "zzzzzzz";
var_dump(commonCharacterCount($s1, $s2));