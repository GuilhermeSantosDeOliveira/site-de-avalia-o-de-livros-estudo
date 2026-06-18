<?= $livro['titulo'] ?>
<div class="  p-2 rounded border-2 border-stone-800 mt-3">
    <div class=" flex">
        <div class="w-1/3">
            imagem
        </div>
        <div>
            <a href="/livro? id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
            <div class="text-xs italic"><?= $livro['autor'] ?></div>
            <div class="text-xs italic">⭐⭐⭐(3 avaliação)</div>
        </div>
    </div>
    <div class="text-sm">
        <?= $livro['descrição'] ?>
    </div>
</div>