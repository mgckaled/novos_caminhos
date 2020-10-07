<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 6');

PHPClassSession('QUESTÃO 6', __LINE__);

// Questão 6
// Dada uma matriz de strings, 
// retorna outra matriz contendo
// todas as suas strings mais longas.

//Exemplo

// Se inputArray = ["aba", "aa", "ad", "vcd", "aba"], 
// o valor de retorno ["aba", "vcd", "aba"].

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando o variável 'inputArray' possui o valor ['a', 'abc', 'cbd,' 'zzzzzz', 'a', 'abcdef', 'asasa', 'aaaaaa'], qual deve ser o valor de retorno da função ?";
echo "<br>";

function allLongestStrings($inputArray) {

    $newArray = [];
    $longestStringArray = [];
    
    for ($i = 0; $i < count($inputArray); $i++) { 
        array_push($newArray ,strlen($inputArray[$i]));
        
        if ( max($newArray) == strlen($inputArray[$i])) {
            array_push($longestStringArray , $inputArray[$i]);
        } 
    }
    return $longestStringArray;
}   



$inputArray = array('a', 'abc', 'cbd', 'zzzzzz', 'a', 'abcdef', 'asasa', 'aaaaaa');

var_dump(strlen($inputArray[0]));
var_dump(strlen($inputArray[1]));
var_dump(allLongestStrings($inputArray));

// function allLongestStrings($inputArray)
// {

//     global $largestLenght;
//     $largestLenght = strlen($inputArray[0]);

//     for ($i = 1; $i < count($inputArray); $i++) {
//         if ($largestLenght < strlen($inputArray[$i])) {
//             $largestLenght = strlen($inputArray[$i]);
//         }
//     }

//     $inputArray = array_filter($inputArray, $largestLenght);
//     return $inputArray;
// }