<?php
function proteger($valor)
{
    return htmlspecialchars(trim($valor));
}

// Se acessar direto (sem POST), redireciona para index.php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

if (
    isset($_POST["quantidade"], $_POST["nomeInstituicao"], $_POST["premio"], $_POST["valor"], $_POST["dataSorteio"]) &&
    !empty(trim($_POST["quantidade"])) &&
    !empty(trim($_POST["nomeInstituicao"])) &&
    !empty(trim($_POST["premio"])) &&
    !empty(trim($_POST["valor"])) &&
    !empty($_POST["dataSorteio"])
) {
    $quantidade = intval($_POST["quantidade"]);
    $nomeInstituicao = proteger($_POST["nomeInstituicao"]);
    $premio = proteger($_POST["premio"]);
    $valor = number_format(floatval($_POST["valor"]), 2, ',', '.');
    $dataSorteio = date("d/m/Y", strtotime($_POST["dataSorteio"]));
} else {
    echo "<p style='color:red;'>Preencha todos os campos corretamente.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Bilhetes Gerados</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <a href="../index.php" class="btn-voltar">← Voltar</a>
    <h1>Bilhetes Gerados</h1>

    <?php for ($i = 1; $i <= $quantidade; $i++):
        $numeroBilhete = str_pad($i, 3, "0", STR_PAD_LEFT);
        ?>
        <div class='ticket'>
            <div class='esquerda'>
                <strong>Campanha:</strong> <?= $nomeInstituicao ?><br>
                <strong>Prêmio:</strong> <?= $premio ?><br>
                <strong>Valor:</strong> R$ <?= $valor ?><br>
                <strong>Data do Sorteio:</strong> <?= $dataSorteio ?><br>
                <div class='numero'>Nº: <?= $numeroBilhete ?></div>
                <div class='nome-comprador'>
                    <label>Nome do Comprador:</label>
                    <div class='linha-nome'></div>
                </div>
                <em>Canhoto do vendedor</em>
            </div>
            <div class='direita'>
                <strong>Campanha:</strong> <?= $nomeInstituicao ?><br>
                <strong>Prêmio:</strong> <?= $premio ?><br>
                <strong>Valor:</strong> R$ <?= $valor ?><br>
                <strong>Data do Sorteio:</strong> <?= $dataSorteio ?><br>
                <div class='numero'>Nº: <?= $numeroBilhete ?></div>
                <div class='nome-comprador'>
                    <label>Nome do Comprador:</label>
                    <div class='linha-nome'></div>
                </div>
            </div>
        </div>
    <?php endfor; ?>

    <button onclick="window.print()" class="btn-padrao">IMPRIMIR BILHETES</button>
    <a href="../index.php" class="btn-voltar">← Voltar</a>

</body>

</html>