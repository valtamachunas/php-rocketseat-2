<?php
require 'dados.php';
$id = $_REQUEST['id'];
$livro = array_filter($livros, function ($l) use ($id) {
    return $l['id'] == $id;
});
echo "<pre>";
var_dump($livro);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-color: #23192d" class="font-bold text-zinc-100">
    <header style="background-color: #fd0a54;">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide"> 🕮 Gerenciador de Leitura</div>
            <ul class="flex space-x-4">
                <li><a href="/" style="color: #f5ecb7;">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus livros</a></li>
            </ul>
            <ul>
                <li><a href="/login" class="hover:underline">Fazer login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        ID do Livro <?php echo $id ?>

    </main>

</body>

</html>