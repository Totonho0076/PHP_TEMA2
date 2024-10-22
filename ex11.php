<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Tipos de Dados em PHP</title>
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
        .details {
            background: #f1f1f1;
            border: 1px solid #007bff;
            padding: 15px;
            border-radius: 4px;
            font-family: monospace;
            color: #333;
            margin: 15px 0;
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
        <h2>Manipulação de Tipos de Dados em PHP</h2>

        <?php
        // Inicializando uma variável como inteiro
        $valor = 10;

        // Exibindo informações sobre a variável antes da conversão
        echo "<p><strong>Antes da Conversão:</strong></p>";
        echo "<p>Valor: <span class='details'>$valor</span></p>";
        echo "<p>Tipo de Dados: <span class='details'>" . gettype($valor) . "</span></p>";

        // Convertendo a variável para string usando settype
        settype($valor, "string");

        // Exibindo informações sobre a variável depois da conversão
        echo "<p><strong>Depois da Conversão:</strong></p>";
        echo "<p>Valor: <span class='details'>$valor</span></p>";
        echo "<p>Tipo de Dados: <span class='details'>" . gettype($valor) . "</span></p>";

        // Exibindo informações detalhadas sobre a variável usando var_dump
        echo "<p><strong>Informações Detalhadas:</strong></p>";
        echo "<pre class='details'>";
        var_dump($valor);
        echo "</pre>";
        ?>
    </div>
    <footer>
        &copy; <?= date("Y") ?> - Exemplo de PHP
    </footer>
</body>
</html>
