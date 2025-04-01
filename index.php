<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual Techcard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="stylesheet" href="/assets/styles/styles.css">
</head>

<body class="flex h-screen bg-gray-100">

    <aside id="sidebar" class="w-64 bg-white text-white p-5 space-y-4 fixed h-full hidden md:block overflow-y-scroll shadow-md">
        <nav class="text-slate-500">
            <ul class="space-y-4">
                <li>
                    <a href="?pagina=home.php" class="flex items-center space-x-2 p-2 rounded hover:bg-slate-100">
                        <span class="iconify text-2xl" data-icon="solar:home-line-duotone"></span>
                        <span>Início</span>
                    </a>
                </li>
                <li>
                    <a href="?pagina=novaPagina.php" class="flex items-center space-x-2 p-2 rounded hover:bg-slate-100">
                        <span class="iconify text-2xl" data-icon="solar:document-text-line-duotone"></span>
                        <span>Nova pagina</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <main>
        <?php

        $home = './src/pages/home.php';
        $novaPagina = './src/pages/novaPagina.php';

        $paginasDisponiveis = [
            $home,
            $novaPagina
        ];

        $pagina = isset($_GET['pagina']) ? basename($_GET['pagina']) : 'home.php';
        $caminhoPagina = "./src/pages/$pagina";

        if (in_array($caminhoPagina, $paginasDisponiveis, true) && file_exists($caminhoPagina)) {
            include $caminhoPagina;
        } else {
            include $home;
        }
        ?>
    </main>
</body>

</html>