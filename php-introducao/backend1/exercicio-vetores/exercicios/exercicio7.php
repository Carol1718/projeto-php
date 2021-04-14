<?php
function getMaiorMenor(array $inteiros){
    $maior = $inteiros[0];
    $menor = $inteiros[0];
    foreach($inteiros as $numero){
        if($numero > $maior){
            $maior = $numero;
        }
        if($numero < $menor){
            $menor = $numero;
        }
    }
    return [$maior, $menor];
}
$vetor = [50, 60, 2, 9, 100];
print_r(getMaiorMenor($vetor));