<?php
require 'dados.php';

$id = $_REQUEST['id'];
$filtrado = array_filter($livros, function ($l) use ($id) {
    return $l['id'] == $id;
});

$livro = array_pop($filtrado);

view('livro', [
    'livro' => $livro
]);

// view('index', compact('livro')); //compact é uma função que pega o nome da variável e o valor dela e cria um array associativo com isso. Só pode usar quando o nome da variável é o mesmo que o nome da chave do array