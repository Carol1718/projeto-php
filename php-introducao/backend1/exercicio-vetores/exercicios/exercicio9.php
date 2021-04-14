<?php
function testarPrimo(int $numero){
    for ($i = 2; $i < ($numero); $i++){
       $resto = $numero % $i;
       if($resto ==0){
        return "não é primo";
       }
    }
        return "é primo";   
 
}

echo testarPrimo(5);
