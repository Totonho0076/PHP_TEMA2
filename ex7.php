!!!!!!!ATÉ AQUI JÁ ESTÁ MODIFICADO!!!!!!!

<?php
// Definição da classe Pessoa
class Pessoa {
    public $nome;
    public $idade;

    public function apresentar() {
        return "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

// Instanciando um objeto da classe Pessoa
$pessoa = new Pessoa();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pessoa->nome = $_POST['nome'];
    $pessoa->idade = $_POST['idade'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Objeto com HTML</title>
</head>
<body>
    <h1>Apresentação da Pessoa</h1>

    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" required><br>

        <input type="submit" value="Apresentar">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p><?php echo $pessoa->apresentar(); ?></p>
    <?php endif; ?>
</body>
</html>
