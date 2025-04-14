# Sistema de Cadastro de Livros - Biblioteca Escolar

Este projeto é um **projeto pedagógico** desenvolvido em PHP, com o objetivo de aplicar o padrão de arquitetura MVC (Model-View-Controller) em um sistema simples de gerenciamento de livros de uma pequena biblioteca escolar. O sistema permite cadastrar, listar e exibir informações sobre os livros, como Título, Autor e Ano de Publicação.

O foco do projeto é o aprendizado prático do padrão MVC, separando as responsabilidades do código de forma clara e eficiente.

## 💡 Funcionalidades

O sistema deve permitir:

1. **Listar os livros cadastrados.**
2. **Exibir informações detalhadas de cada livro**, incluindo:
    - Título
    - Autor
    - Ano de Publicação

## 🔧 Como Funciona

### 1️⃣ Model - `Livro.php`

A classe `Livro` é responsável por armazenar os dados dos livros. O sistema contém um array com pelo menos 5 livros fictícios, e cada livro possui as seguintes propriedades:

- Título
- Autor
- Ano de Publicação

**Método obrigatório**:

```php
public function listarLivros() {
    return $this->livros;
}

```

## Página finalizada
![image](https://github.com/user-attachments/assets/1d37a260-5ab3-44c0-9d3b-6a001c11ee07)



