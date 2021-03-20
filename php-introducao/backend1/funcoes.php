<?php

//As funções são blocos de códigos contendo lógicas reutilizáveis
  //declarando funções em PHP
  function exibirMensagem(){
    $mensagem = "Olá mundo das Funções!";
    echo $mensagem;
  }
  exibirMensagem();
  exibirMensagem();
  echo "</br /><br />";
  
  //passando argumentos para a função
  function somar($a, $b){
    $soma = $a + $b;
    echo $soma;
  }
  somar(10, 5);
  echo "</br /><br />"; 

  somar(100, 55);
  echo "</br /><br />";
  //retornando valores de uma função
  function formatarNome($primeiroNome, $ultimoNome){
    $nomeFormatado = $primeiroNome . " " . $ultimoNome;
    return $nomeFormatado;
  }
  $nome = formatarNome("Fulano", "de Tal");
  echo $nome;
  echo "</br /><br />";

  echo formatarNome("Carol", "Mendes");
  echo "</br /><br />";

  //argumentos opcionais
  function formatarData(int $dia,int $mes,int $ano = 2021){
    // 10/12/2021
    $dataFormatada = $dia . "/" . $mes . "/" . $ano;
    return $dataFormatada;
  }
  echo formatarData(10.5, 03, 2010);
  echo "</br /><br />";

  //passando vetores como argumentos
  function exibirNomes(array $nomes){
   foreach($nomes as $nome){
     echo $nome;
   } 
  }
  exibirNomes(["Italo", "Guilherme", "Emerson"]);