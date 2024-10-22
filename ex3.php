<?php
// Declaração e atribuição de uma variável do tipo inteiro.
$idade = 25;

// Mensagem baseada na idade.
if ($idade >= 18) {
    $mensagem = "Você é maior de idade.";
} else {
    $mensagem = "Você é menor de idade.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <h1>Verificação de Idade</h1>
    <p><?php echo $mensagem; ?></p>
    <p>Sua idade: <?php echo $idade; ?></p>
</body>
</html>

