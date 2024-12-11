<main class="mx-auto max-w-screen-lg space-y-6">
    <form class="w-full flex space-x-2 mt-6">
        <input type="text" style="background-color: #f5ecb7;"
            class="rounded-md border-yellow-100 border-2 focus:outline-none px-2 py-1 text-zinc-950"
            placeholder="Pesquisar...">
        <button type="submit">🔎</button>
    </form>

    <!-- Lista de livros -->
    <section class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <?php foreach ($livros as $livro): ?>
        <div style="background-color: #f57576" class="p-2 rounded border-2 border-yellow-100">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-1">
                    <a href="/livro?id=<?php echo $livro['id'] ?>"
                        class="font-semibold hover:underline"><?php echo $livro['titulo'] ?></a>
                    <div class="text-xs italic"><?php echo $livro['autor'] ?></div>
                    <div class="text-xs italic">⭐⭐⭐</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?php echo $livro['descricao'] ?>
            </div>
        </div>
        <?php endforeach; ?>
    </section>