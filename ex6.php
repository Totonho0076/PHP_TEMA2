<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Array com HTML</title>
</head>
<body>
    <h1>Lista de Frutas</h1>

    <?php
    // Criando um array de frutas.
    $frutas = array("Maçã", "Banana", "Laranja", "Morango", "Abacaxi");

    // Acessando elementos do array usando índices.
    echo "<p>A primeira fruta é: " . $frutas[0] . "</p>";
    echo "<p>A segunda fruta é: " . $frutas[1] . "</p>";

    // Adicionando um novo elemento ao array.
    if (isset($_POST['nova_fruta']) && !empty($_POST['nova_fruta'])) {
        $nova_fruta = $_POST['nova_fruta'];
        $frutas[] = $nova_fruta; // Adiciona a nova fruta ao array
    }

    // Exibindo a lista de frutas em uma lista não ordenada.
    echo "<p>Lista de frutas:</p>";
    echo "<ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";
    ?>

    <!-- Formulário para adicionar uma nova fruta -->
    <form method="post">
        <label for="nova_fruta">Adicionar uma nova fruta:</label>
        <input type="text" name="nova_fruta" required>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>
