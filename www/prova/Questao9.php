<?php

require __DIR__ . '/../framework/config.php';
PHPClassName('QUESTÃO 9');

PHPClassSession('QUESTÃO 9', __LINE__);

// Questão 9

// Algumas pessoas estão em uma fila no parque.
// As pessoas e as arvores no parque serão representadas
// por um vetor.

// O valor -1 representa uma árvore
// valor positivo representa a altura de uma pessoa

// Existem árvores entre as pessoas e as árvores 
// não não podem ser movidas.

// Sua tarefa é reorganizar as pessoas por suas alturas
// em uma ordem não decrescente, sem mover as árvores.

// Considere que as pessoas podem ser muito altas!

//Exemplo

//Se $a = [-1, 150, 190, 170, -1, -1, 160, 180], 
// o retorno deve ser [-1, 150, 160, 170, -1, -1, 180, 190].

echo "Considerando a solução desenvolvida por você, para o enunciado abaixo quando 'a' = [23, 54, -1, 43, 1, -1, -1, 77, -1, -1, -1, 3] qual deve ser o valor de retorno da função";

function sortByHeight($a)
{   
    // Armazenar todos os valores não negativos dentro de uma nova array
    // $pos ira apresentar apenas valores não negativos.
    $pos = [];
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] >= 0) {
            array_push($pos, $a[$i]);
        }
    }
    // ordenar valores não negativos do menor para o maior.
    sort($pos);

    // ordenar os elementos não negativos dentro da array original
    // nao alterando a ordem dos elementos negativos 
    $j = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] >= 0 ) {
            $a[$i] = $pos[$j];
            $j++;  
        }
    }
    // loop que retorna cada elemento, conforme a reorganização da array.
    for ($i = 0; $i < count($a); $i++) { 
        return $a;
    }
}

$x = [-1, 150, 190, 170, -1, -1, 160, 180];
$a = [23, 54, -1, 43, 1, -1, -1, 77, -1, -1, -1, 3];
var_dump(count($x));
var_dump(count($y));
var_dump(sortByHeight($a));