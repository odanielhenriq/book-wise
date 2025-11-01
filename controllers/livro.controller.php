<?php

require 'dados.php';

$id = (int) $_GET['id'];

$livros = array_filter($livros, fn($livro) => $livro['id'] === $id);

$livro = reset($livros);

$titulo    = $livro['titulo'];
$autor     = $livro['autor'];
$descricao = $livro['descricao'];

view("livro", compact('livro'));
