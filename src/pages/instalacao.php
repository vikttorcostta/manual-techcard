<?php
    require_once 'helpers.php';
    $pagina = $_GET['pagina'];
?>

<section class="p-4 flex-1 ml-0 sm:ml-64 sm:p-8">
    <h2 class="text-2xl font-semibold"><?= tituloPaginaDinamico($pagina); ?></h2>

    <section class="mt-8 bg-white p-6 rounded shadow flex flex-col items-center gap-2 sm:flex-row">
        <div>
            <p>Edinaldo Pereira?</p>
        </div>
    </section>
    <script src="src/js/main.js"></script>
</section>