<?php
$id = $_REQUEST['id'];

$db = new DB();
$livro = $db->livro($id);


view('livro', [
    'livro' => $livro
]);

// view('index', compact('livro')); //compact é uma função que pega o nome da variável e o valor dela e cria um array associativo com isso. Só pode usar quando o nome da variável é o mesmo que o nome da chave do array