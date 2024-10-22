<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão Inteira em PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        p {
            background: #e9ecef;
            border-left: 5px solid #007bff;
            padding: 15px;
            margin: 15px 0;
            border-radius: 4px;
            color: #495057;
            font-size: 1.1em;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Divisão Inteira em PHP</h2>
        <?php
        // Calculando a divisão entre 5 e 3
        $resultado = 5 / 3;
        $resultado_formatado = number_format($resultado, 2);
        echo "<p>Resultado da divisão entre 5 e 3: <strong>$resultado_formatado</strong></p>";

        // Convertendo o resultado para inteiro
        settype($resultado, "integer");

        // Exibindo o resultado da divisão inteira
        echo "<p>Resultado da divisão inteira entre 5 e 3: <strong>$resultado</strong></p>";
        ?>
    </div>
    <footer>
        &copy; <?= date("Y") ?> - Exemplo de PHP
    </footer>
</body>
</html>
