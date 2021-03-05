<?php

    $reais = $_GET["valorReais"];
    $unidadeMonetaria = $_GET["unidadeMonetaria"];

    $Dolar = $reais / 5.41;
    $Euro = $reais / 6.57;

    if ($unidadeMonetaria == "Dolar"){
        echo "<h1>Valor total em $unidadeMonetaria: $ $Dolar</h1>";
    }else{
        echo "<h1>Valor total em $unidadeMonetaria: € $Euro</h1>";
    }