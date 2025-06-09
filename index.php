<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Gerador de Rifas - Formulário</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <h1>Gerador de Rifas</h1>

    <form method="post" action="/Avaliacao/rifa/rifa.php" class="form">

        <label for="nomeInstituicao">Nome da Instituição:</label>
        <input type="text" name="nomeInstituicao" id="nomeInstituicao" required>

        <label for="premio">Prêmio:</label>
        <input type="text" name="premio" id="premio" required>

        <label for="valor">Valor do Bilhete (R$):</label>
        <input type="number" step="0.01" name="valor" id="valor" required>

        <label for="dataSorteio">Data do Sorteio:</label>
        <input type="date" name="dataSorteio" id="dataSorteio" required>

        <label for="quantidade">Quantidade de Bilhetes:</label>
        <input type="number" name="quantidade" id="quantidade" required>

        <button type="submit" class="btn-padrao">GERAR BILHETES</button>
    </form>

</body>

</html>