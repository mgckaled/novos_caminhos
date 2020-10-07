<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 3');
PHPClassSession('QUESTÃO 3', __LINE__);

// Questão 3
// Dado um vetor de inteiros, encontre o par de elementos
// adjacentes que possui o maior produto
// e depois retorne o valor desse produto.

//Exemplo

//Pois inputArray = [3, 6, -2, -5, 7, 3], 
// o valor de retorno deve ser 21.
// pois 7 e 3 produz o maior produto.

// Retorno o maior produto
//O maior produto de elementos adjacentes.

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando o variável 'inputArray' possui o valor [5, 6, -4, 2, 3, 2, -23], qual deve ser o valor de retorno da função ?  " . "\n" ;

function adjacentElementsProduct($inputArray, $num)
{
    if ($num < 2) {
        echo "Não existe pares\n";
        return;
    }

    // Inicializando o par de elementos com o maior produto
    $x = $inputArray[0];
    $y = $inputArray[1];

    // Percorrer todos os elementos conforme o número de elementos da array, com incremento
    for ($i = 0; $i < $num; $i++)
        // Mesma lógica adicionando + 1 para considerar e indicar o elemento subjacente
        for ($j = $i + 1; $j < $num; $j++) {

            // loop com a condição de conferência para cada par de elemntos da array
            if ($inputArray[$i] * $inputArray[$j] > $x * $y) {

                $x = $inputArray[$i];
                $y = $inputArray[$j];
            }
        }
    echo "Elementos com o maior produto {", $x, ", ", $y, "}\n";
    echo "= ", $x * $y;
}

$inputArray = array(5, 6, -4, 2, 3, 2, -23);
$num = count($inputArray);
var_dump(adjacentElementsProduct($inputArray, $num));