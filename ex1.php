<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            font-size: 3rem;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $mensagem = "Olá Mundo!";
            echo "<h1>$mensagem</h1>";
        ?>
        <p>Este é um exemplo de página PHP estilizada com HTML e CSS.</p>
    </div>
</body>
</html>
