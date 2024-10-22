<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP com HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            background: #e0e0e0;
            border-left: 5px solid #007bff;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
        .resultado {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manipulação de Strings e Data</h1>

        <?php
        // String de exemplo
        $texto = "Oi, Mundo!";

        // Exibindo o comprimento da string
        $comprimento = strlen($texto);
        echo "<p>Comprimento da string: <span class='resultado'>$comprimento</span></p>";

        // Convertendo a string para minúsculas
        $minusculas = strtolower($texto);
        echo "<p>String em minúsculas: <span class='resultado'>$minusculas</span></p>";

        // Convertendo a string para maiúsculas
        $maiusculas = strtoupper($texto);
        echo "<p>String em maiúsculas: <span class='resultado'>$maiusculas</span></p>";

        // Substituindo parte da string
        $nova_string = str_replace("Mundo", "Planeta", $texto);
        echo "<p>String com substituição: <span class='resultado'>$nova_string</span></p>";
        ?>
    </div>
</body>
</html>
