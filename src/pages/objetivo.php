<?php
    require_once 'helpers.php';
    $pagina = $_GET['pagina'];
?>

<section class="p-4 flex-1 ml-0 sm:ml-64 sm:p-8">
    <h2 class="text-2xl font-semibold"><?= tituloPaginaDinamico($pagina); ?></h2>

    <section class="mt-16 bg-white p-6 rounded shadow flex flex-col items-center gap-2 sm:flex-row">
        <div class="flex flex-col gap-5 ">
        <h1 class="text-3xl font-semibold flex items-center gap-2">
    <iconify-icon icon="solar:bill-check-bold" class="text-4xl text-blue-600"></iconify-icon>
    Objetivo do Manual do Projeto vCardHub
</h1>

             <p>O Manual do Projeto TECHCARD tem como principal propósito orientar o usuário na compreensão, instalação e utilização eficaz do sistema. Desenvolvido como parte do curso Técnico em Desenvolvimento de Sistemas do SENAI/BA – Camaçari, este manual fornece uma base sólida para garantir uma experiência fluida e completa com a plataforma TECHCARD, desde os primeiros passos até o uso das funcionalidades mais avançadas.</p>

             <p>O documento é voltado tanto para usuários iniciantes quanto para usuários avançados e gestores, oferecendo uma abordagem prática, organizada e acessível.</p>
        </div>
        
    </section>
    <script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
    <script src=""></script>

    <script src="src/js/main.js"></script>
</section>