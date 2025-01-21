<?php


// $db = new DB();
// $livros = $db->livros();
//em vez de usar igual está acima, vamos usar de maneira mais limpa:
$pesquisar = $_REQUEST['pesquisar'] ?? '';

$livros = $database->query(
    query: "select * from livros where titulo like :filtro",
    class: Livro::class,
    params: ['filtro' => "%$pesquisar%"]
)->fetchAll();

view('index', [
    'livros' => $livros
]);

// view('index', compact('livros')); //compact é uma função que pega o nome da variável e o valor dela e cria um array associativo com isso. Só pode usar quando o nome da variável é o mesmo que o nome da chave do array