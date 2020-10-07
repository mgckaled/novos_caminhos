<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 1');
PHPClassSession('QUESTÃO 1', __LINE__);


// Questão 1
// Considere a function incompleta abaixo e escreva um código que
// resolva o seguinte problema

// Dado um ano, retorne o século em que ele se encontra.
// O primeiro século se estende do ano 1 até e incluindo o ano 100,
// o segundo segundo século do ano 101 até e incluindo o ano 200,
// e assim sucessivamente.

//Exemplo

//Para $ano = 1905, a saída deve ser
//centuryFromYear(year) = 20;
//Pois year = 1700, a saída deve ser
//centuryFromYear(year) = 17.

//Retorno inteiro
//O número do século em que se encontra o ano.

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando o variável 'year' possui o valor 374, qual deve ser o número do século em que se encontra o ano 374 ? *";

function centuryFromYear($year)
{
    return ceil($year / 100);
}

var_dump(centuryFromYear(101));
var_dump(centuryFromYear(1905));
var_dump(centuryFromYear(1700));
var_dump(centuryFromYear(2020));
var_dump(centuryFromYear(374));