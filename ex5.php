<?php
// Inicializa a variável booleana
$temConta = null;
$mensagem = "";

// Verifica se o formulário foi enviado
if (isset($_POST['submit'])) {
    // Recebe a escolha do usuário
    $temConta = isset($_POST['temConta']) && $_POST['temConta'] == '1';

    // Mensagem baseada na variável booleana.
    if ($temConta) {
        $mensagem = "Você possui uma conta cadastrada.";
    } else {
        $mensagem = "Você não possui uma conta cadastrada.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Conta</title>
</head>
<body>
    <h1>Verificação de Conta</h1>
    <form method="post">
        <label>
            <input type="radio" name="temConta" value="1" required> Sim, eu tenho uma conta
        </label><br>
        <label>
            <input type="radio" name="temConta" value="0"> Não, eu não tenho uma conta
        </label><br><br>
        <input type="submit" name="submit" value="Verificar">
    </form>
    <p><?php echo $mensagem; ?></p>
</body>
</html>
