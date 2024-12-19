<?php echo $livro['titulo'] ?>
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