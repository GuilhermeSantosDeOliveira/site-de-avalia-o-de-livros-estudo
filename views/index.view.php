<h1 class="font-bold text-lg text-center italic mt-1">//explorar\\</h1>
<form class="w-full flex space-x-2 ">
    <input type="text"
        class="border-stone-800 bg-stone-900 text-sm border-2 rounded-md focus:outline-none px-2 py-1 w-full"
        placeholder="pesquisar...">
    <button type="submit">🔎</button>
</form>
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php foreach ($livros as $livro): ?>

        <!--livro-->
        <div class="  p-2 rounded border-2 border-stone-800 mt-3">
            <div class=" flex">
                <div class="w-1/3">
                    imagem
                </div>
                <div>
                    <a href="/livro? id=<?= $livro['id'] ?>" class="font-semibold hover:underline">
                        <?= $livro['titulo'] ?>
                    </a>
                    <div class="text-xs italic">
                        <?= $livro['autor'] ?>
                    </div>
                    <div class="text-xs italic">⭐⭐⭐(3 avaliação)</div>
                </div>
            </div>
            <div class="text-sm">
                <?= $livro['descrição'] ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>