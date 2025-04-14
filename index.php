<?php
// Incluindo o Controller
include 'livroController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sistema de Cadastro de Livros em uma Biblioteca 📃</h1>
        <hr>

        <?php
        // Instanciando o controlador
        $livroController = new LivroController();

        // Exibindo os livros
        $livroController->exibirLivros();
        ?>
    </div>
</body>
</html>
