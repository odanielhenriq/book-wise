<main class="mx-auto max-w-screen-lg space-y-6">

    <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
        <div class="flex">
            <div class="w-1/3">imagem</div>
            <div class="space-y-1">
                <a href="/livro.php?id=<?php echo $livro['id']?>" class="font-semibold hover:underline"><?php echo $livro['titulo']?></a>
                <div class="text-xs italic"><?php echo $livro['autor']?></div>
                <div class="text-xs italic">⭐⭐⭐(3 Avaliações)</div>
            </div>
        </div>
        <div class="text-sm mt-5">
            <?php echo $livro['descricao']?>
        </div>
    </div>


</main>