<?php
require 'dados.php';
$id = $_REQUEST["id"];
$filtrado = array_filter($livros, function ($l) use ($id) {
    return $l["id"] == $id;
});
$livro = array_pop($filtrado);
?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body class="bg-stone-950 text-stone-200">
    <div>
        <header class=" bg-stone-800">
            <nav class=" mx-auto max-w-5xl flex justify-between px-8 py-4">
                <div class="font-bold text-xl tracking-wide">book wise</div>
                <ul class="flex space-x-4 font-bold">
                    <li><a href="index.php" class="text-lime-500">explorar</a></li>
                    <li><a href="#" class="hover:underline">meus livros</a></li>
                </ul>
                <ul>
                    <li><a href="#" class="hover:underline">login</a></li>
                </ul>
            </nav>
        </header>
        <main class="mx-auto max-w-5xl">
            <div class="  p-2 rounded border-2 border-stone-800 mt-3">
                <div class=" flex">
                    <div class="w-1/3">
                        imagem
                    </div>
                    <div>
                        <a href="/livro.php? id=<?= $livro['id'] ?>"
                            class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                        <div class="text-xs italic"><?= $livro['autor'] ?></div>
                        <div class="text-xs italic">⭐⭐⭐(3 avaliação)</div>
                    </div>
                </div>
                <div class="text-sm">
                    <?= $livro['descrição'] ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>