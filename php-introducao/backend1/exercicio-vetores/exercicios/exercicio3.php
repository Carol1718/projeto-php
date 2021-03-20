<?php
 
$vetor = ["Olá", 1, 2, "Trinta"];
 
function inverteVetor($vetor){
 
$vetorInvertido = [];
for( $i = (count($vetor) - 1) ; $i >= 0 ; $i--){
 
$vetorInvertido[] = $vetor[$i];
 
}
 
return $vetorInvertido;
 
}
 
print_r(inverteVetor($vetor));