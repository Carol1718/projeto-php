<?php

$listaCidades = [
    1 => "São Paulo",
    2 => "Jandira",
    3 => "Itapevi",
    4 => "Barueri",
    5 => "Osasco",
    6 => "Santana de Parnaibaa",
    7 => "Carapicuiba",
  ];
 
    $nome = $_POST["nomeUsuario"];
 
    $cidadeSelecionada = $_POST["cidades"];
 
    // echo "Ola $nome, de $cidadeSelecionada";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../ds2m-a/styles-global.css" />
  <title>Seja Bem-Vindo</title>
</head>
<body>
    <h1>Olá <em><?= $nome ?></em>, de <em><?= $listaCidades[$cidadeSelecionada]?></em>. SEJA BEM VINDO!!!</h1>
</body>