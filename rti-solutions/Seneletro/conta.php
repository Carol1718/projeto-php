<?php
 
    $nome= $_GET["nome"];
    $endereco = $_GET["endereco"];
    $cep = $_GET["cep"];
    $consumoDeKwh = $_GET["kWh"];
    $mensagem = "(Obrigado por economizar!)";
    const BAIXO_CONSUMO = 0.32;
    const ALTO_CONSUMO = 0.42;
    $valorBaixoConsumo = $consumoDeKwh + BAIXO_CONSUMO;
    $valorAltoConsumo = $consumoDeKwh + ALTO_CONSUMO;
    ?>
 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles-global.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    <h1>Conta de Luz de <?= $nome ?></h1>
        <form>
            <h1><?= $endereco ?></h1>
            <?php
                if($consumoDeKwh > 120){
            ?>
                <h1 style="color: red;">Consumo: <?= $consumoDeKwh ?> killowats-hora</h1>
            <?php
                }else{
            ?>
                <h1>Consumo: <?= $consumoDeKwh ?> killowats-hora. <h1 style="color:blue;"><?= $mensagem ?></h1>
            <?php
                }
            ?>
            <?php
                if($consumoDeKwh > 120){
            ?>
                <h1>Valor a pagar: R$ <em><?= $valorAltoConsumo ?></em></h1>
            <?php
            }else{
            ?>
                <h1>Valor a pagar: R$ <em><?= $valorBaixoConsumo ?></em></h1>
            <?php
                }
            ?>
        </form>
    </body>
    </html>