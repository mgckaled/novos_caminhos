<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 4');
PHPClassSession('QUESTÃO 4', __LINE__);

// Questão 4

// Gisifruno ganhou estátuas de diferentes tamanhos como
// presente da Mária de aniversário,
// cada estátua tendo um tamanho inteiro não negativo.
// Como ele gosta de fazer as coisas perfeitas, ele quer
// organizá-las da menor para a maior, de forma que cada
// estátua seja maior que a anterior exatamente em 1.
// Ele pode precisar de algumas estátuas adicionais 
// para conseguir isso. 
// Ajude-o a descobrir o número mínimo de estátuas
// adicionais necessárias.

//Exemplo

//Se statues = [6, 2, 3, 8], o valor
// de retorno deve ser 3.
// Gisifruno precisa de estátuas de tamanhos 4, 5 e 7
// ou seja de três estátuas

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando o variável 'statues' possui o valor [6, 3], qual deve ser o valor de retorno da função ?";
echo '<br>';

function makeArrayConsecutive($statues) {
    $numberOfItens = count($statues);
    $maximumValue = max($statues);
    $minimumValue = min($statues);
    $rangeOfTheArray = $maximumValue - $minimumValue + 1;
    $numberOfMissingStatues = $rangeOfTheArray - $numberOfItens;
    return $numberOfMissingStatues;
    
}

$statues = array(6, 3);
echo count($statues);
echo max($statues);
echo min($statues);
var_dump(makeArrayConsecutive([6,3]));
var_dump(makeArrayConsecutive([6, 2, 3, 8]));