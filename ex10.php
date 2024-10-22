<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Concatenação de Strings em PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
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
            transition: transform 0.2s;
        }
        .container:hover {
            transform: scale(1.02);
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
        <h1>Concatenação de Strings em PHP</h1>

        <?php
        // Definindo as variáveis
        $aluno = "João";
        $curso = "Programação";

        // Concatenando as strings para formar uma mensagem
        $mensagem = "O aluno " . $aluno . " está matriculado no curso de " . $curso . ".";
        
        // Exibindo a mensagem
        echo "<p>$mensagem</p>";
        ?>
    </div>
    <footer>
        &copy; <?= date("Y") ?> - Exemplo de PHP
    </footer>
</body>
</html>
