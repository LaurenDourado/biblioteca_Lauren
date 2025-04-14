<?php
// Controller - LivroController.php

// Incluindo o arquivo Model (Livro.php) e View (livrosView.php)
include 'Livro.php';
include 'livrosView.php';

// Classe LivroController
class LivroController {
    
    // Função para obter os livros e exibir na View
    public function exibirLivros() {
        // Criando um objeto da classe Livro
        $livroObj = new Livro();
        
        // Pegando a lista de livros usando o método listarLivros() do Model
        $livros = $livroObj->listarLivros();
        
        // Passando a lista de livros para a View para exibir
        exibirLivros($livros);
    }
}
?>
