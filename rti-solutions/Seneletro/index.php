<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>
<body>
    <form method="$_GET" action="conta.php">
            <label for="nome">Nome completo:</label>
            <input type="text"  name="nome" id="nome" required placeholder="Seu nome completo">
        </div>
        <div class="input-group">
            <label for="endereco">Endereço:</label>
            <input type="text"  name="endereco" id="endereco" required placeholder="ex:Rua Belém, 72A. ">
            <label for="cep">Digite seu CEP:</label>
            <input type="text"  name="cep" id="cep" required placeholder="ex:xxxxx-xxx">
        </div>
        <div class="input-group">
            <label for="kWh">Consumo em kWh:</label>
            <input type="number"  name="kWh" id="kWh" required placeholder="Informe seu consumo">
        </div>
        <div>
            <button>Calcular</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>