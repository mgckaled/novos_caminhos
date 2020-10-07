<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 5');

PHPClassSession('QUESTÃO 5', __LINE__);

// Questão 5
// Dada uma sequência de inteiros como um array,
// determine se é possível obter uma sequência
// estritamente crescente removendo não mais do que um elemento do array.

//Exemplo

// Se $sequence = [1, 3, 2, 1], a saída deve ser false
// Não há nenhum elemento neste array que possa ser
// removido para obter uma sequência estritamente crescente.

// Se $sequence = [1, 3, 2], a saída deve ser true.
// Você pode remover 3 do vetor para obter a sequência
// estritamente crescente [1, 2]. 
// Como alternativa, você pode remover 2 para obter a
// sequência estritamente crescente [1, 3].

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando o variável 'sequence' possui o valor [3, 5, 67, 98, 3], qual deve ser o valor de retorno da função ? true ou false ?";

function almostIncreasingSequence($sequence) {
    
    $count = 0;
    
    for ($i = 0; $i < count($sequence); $i++) {
        if ($sequence[$i] <= $sequence[$i - 1] ) {
            $count++;
            if ($sequence[$i] <= $sequence[$i-2] && $sequence[$i+1] <= $sequence[$i-1] ) {
                return false;
            }
        }
    } 
    
    return $count <= 1;
}

var_dump(almostIncreasingSequence([3, 5, 67, 98]));
var_dump(almostIncreasingSequence([1, 3, 2, 1]));
var_dump(almostIncreasingSequence([1, 3, 2]));
var_dump(almostIncreasingSequence([1, 2, 1, 2]));



// function almostIncreasingSequence($sequence)
// {
//     $inc = false;
//     for ($i = 0; $i < count($sequence); $i++) {
//         if ($sequence[$i] >= $sequence[$i+1]) {
//             if ($inc) {
//                 $inc = false;
//             } else {
//                 return false;
//             }
//         }
//     }
//     return true;
// }