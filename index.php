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

    <aside id="sidebar"
        class="w-64 bg-white text-white p-5 space-y-4 fixed h-full hidden md:block overflow-y-scroll shadow-md z-10">
        <nav class="text-slate-500">
            <ul class="space-y-4">
                <div>
                    <img src="" alt="">
                </div>
                <li>
                    <a href="?pagina=home.php" class="flex items-center space-x-2 p-2 rounded hover:bg-slate-100">
                        <span class="iconify text-2xl" data-icon="solar:home-line-duotone"></span>
                        <span>Início</span>
                    </a>
                </li>
                <li>
                    <a href="?pagina=objetivo.php" class="flex items-center space-x-2 p-2 rounded hover:bg-slate-100">
                        <span class="iconify text-2xl" data-icon="solar:shield-check-line-duotone"></span>
                        <span>Objetivo</span>
                    </a>
                </li>
                <li>
                    <button id="toggle-submenu"
                        class="w-full flex items-center space-x-2 p-2 rounded hover:bg-slate-100">
                        <span class="iconify text-2xl" data-icon="solar:cloud-line-duotone"></span>
                        <span>Guia de Instalação</span>
                    </button>
                    <ul id="submenu" class="ml-6 mt-2 space-y-2 hidden">
                        <li>
                            <a href="?pagina=configuracoes.php"
                                class="block p-2 rounded hover:bg-slate-100">Configurações Mínimas</a>
                        </li>
                        <li>
                            <a href="?pagina=instalacao.php" class="block p-2 rounded hover:bg-slate-100">Instalação e
                                Acesso</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <main class="w-full">

        <div class="bg-white p-10 shadow-md flex flex-col items-center w-full fixed">
            <button id="menu-toggle" class="md:hidden p-2 fixed top-2 right-3 text-slate-700">
                <span class="iconify text-4xl" data-icon="solar:hamburger-menu-line-duotone"></span>
            </button>
        </div>

        <div class="m-2">
            <?php

            require_once "helpers.php";

            $home = './src/pages/home.php';
            $novaPagina = './src/pages/novaPagina.php';
            $configuracoes = './src/pages/configuracoes.php';
            $instalacao = './src/pages/instalacao.php';
            $objetivo = './src/pages/objetivo.php';

            $paginasDisponiveis = [
                $home,
                $novaPagina,
                $configuracoes,
                $instalacao,
                $objetivo
            ];

            roteamentoPaginas($paginasDisponiveis, $home);
            ?>

        </div>
        <script src="src/js/main.js"></script>
    </main>
</body>

</html>