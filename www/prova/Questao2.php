<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 2');
PHPClassSession('QUESTÃO 2', __LINE__);

// Questão 2
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

//Dada uma váriavel $inputString, verifique se é um palíndromo .

//Exemplo

//Para inputString = "aabaa", o valor de retorno deve ser true;

//Para inputString = "abac", o valor de retorno deve ser false;

//Resultado booleano
// true se inputString é um palíndromo,
// false se caso contrário.

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando o variável 'inputString' possui o valor 'zzzazzazz', qual deve ser o valor de retorno da função ? true ou false ? *";


function checkPalindrome($inputString)
{
    if (strrev($inputString) == $inputString) {
        return true;
    } else {
        return false;
    }
}
var_dump(checkPalindrome('zzzazzazz'));
var_dump(checkPalindrome('arara'));
var_dump(checkPalindrome('abac'));
var_dump(checkPalindrome('Marcel'));
var_dump(checkPalindrome('aabaa'));
var_dump(checkPalindrome('zzzazzazz'));
var_dump(checkPalindrome('zzazzazzz'));