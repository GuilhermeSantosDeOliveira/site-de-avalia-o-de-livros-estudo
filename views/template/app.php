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
                    <li><a href="/meus-livros" class="hover:underline">meus livros</a></li>
                </ul>
                <ul>
                    <li><a href="/login" class="hover:underline">login</a></li>
                </ul>
            </nav>
        </header>
        <main class="mx-auto max-w-5xl">
            <?php require "views/{$view}.view.php"; ?>

        </main>
    </div>
</body>

</html>