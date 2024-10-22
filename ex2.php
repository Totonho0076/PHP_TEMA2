<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : "Visitante";
$saudacao = "Olá, " . $nome . "! Bem-vindo!";
$saudacao_interpolada = "Olá, $nome! Bem-vindo!";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação</title>
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
    <h1>Saudação</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <button type="submit">Enviar</button>
    </form>
    <p><?php echo $saudacao; ?></p>
    <p><?php echo $saudacao_interpolada; ?></p>
</body>
</html>