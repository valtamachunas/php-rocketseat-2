<?php
require 'dados.php';


view('index', [
    'livros' => $livros
]);

// view('index', compact('livros')); //compact é uma função que pega o nome da variável e o valor dela e cria um array associativo com isso. Só pode usar quando o nome da variável é o mesmo que o nome da chave do array