<?php
// View - livrosView.php

// Função para exibir a lista de livros no formato HTML
function exibirLivros($livros) {
    echo "<ul>";
    foreach ($livros as $livro) {
        echo "<li>Título: " . $livro['titulo'] . " | Autor: " . $livro['autor'] . " | Ano: " . $livro['ano'] . "</li>";
    }
    echo "</ul>";
}
?>
