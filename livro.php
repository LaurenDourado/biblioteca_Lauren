<?php
// Model - Livro.php

class Livro {
    // Propriedade privada que armazena os livros
    private $livros = [];

    // Construtor para inicializar os livros
    public function __construct() {
        $this->livros = [
            [
                'titulo' => 'Simplismente como Jesus 🖨️',
                'autor' => 'Max Lucado',
                'ano' => 1998
            ],
            [
                'titulo' => 'O Deus que Destrói Sonhos 🍦',
                'autor' => ' Rodrigo Bibo',
                'ano' => 2021
            ],
            [
                'titulo' => 'Em Seus Passos o que Faria Jesus 👣',
                'autor' => 'Charles M. Sheldon',
                'ano' => 1896
            ],
            [
                'titulo' => 'Cartas aos Pecadores 💌',
                'autor' => 'Douglas Gonçalves',
                'ano' => 2018
            ],
            [
                'titulo' => 'Praticando a Presença de Deus 🕊️',
                'autor' => ' Brother Lawrence',
                'ano' => 1692
            ]
        ];
    }

    // Método público para listar os livros
    public function listarLivros() {
        return $this->livros;
    }
}
?>
