<?php

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$anoNascimento = 2021 - $idade;

echo "ola, $nome, voce nasceu em $anoNascimento";