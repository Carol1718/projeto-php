<?php

function verificarNome(array $vetorNomes, $nomeEspecifico){

    foreach($vetorNomes as $nome){
        if($nome == $nomeEspecifico){
            return true;
        }
     
        }

        return false;
    }


$nomes = ["Carine", "Carol", "Margarida"];

if(verificarNome($nomes, "Carol")){
    echo "Carol esta na lista";
}else{
     echo "Carol não esta na lista";
}

?>

