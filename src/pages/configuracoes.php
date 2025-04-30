<?php
    require_once 'helpers.php';
    $pagina = $_GET['pagina'];
?>


<section class="p-4 flex-1 ml-0 sm:ml-64 sm:p-8">
    <section class="mt-16 bg-white p-6 rounded shadow flex flex-col items-center gap-2 sm:flex-row">
        <div class="flex flex-col gap-4">
            <h2 class="text-3xl font-semibold">
                <?php
                    echo tituloPaginaDinamico($pagina);
                ?>
            </h2>
            <p>Para garantir o funcionamento adequado da aplicação, certifique-se de que o ambiente onde ela será
                executada atenda aos seguintes requisitos mínimos:<br><br>


            <h2 class="text-2xl font-semibold flex items-center gab-3">
                <span class="iconify text-2xl" data-icon="solar:round-alt-arrow-right-line-duotone"></span>
                Sistema Operacional
            </h2>
            <br>

            Linux 22.4<br><br>

            <h2 class="text-2xl font-semibold flex items-center gab-3">
                <span class="iconify text-2xl" data-icon="solar:round-alt-arrow-right-line-duotone"></span>
                PHP
            </h2><br>

            Versão: 8.3<br><br>

            Extensões Obrigatórias<br><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>BCMath</li>
                <li>Ctype</li>
                <li>Fileinfo</li>
                <li>JSON</li>
                <li>Mbstring</li>
                <li>OpenSSL</li>
                <li>PDO</li>
                <li>Tokenizer</li>
                <li>XML</li>
            </ul><br>

            Configuração Recomendada:<br><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>memory_limit de pelo menos 256</li>
                <li>max_execution_time de 60 segundos ou mais</li>
            </ul><br>

            <h2 class="text-2xl font-semibold flex items-center gab-3">
                <span class="iconify text-2xl" data-icon="solar:round-alt-arrow-right-line-duotone"></span>
                Framework
            </h2><br>

            Laravel 12<br><br>

            <h2 class="text-2xl font-semibold flex items-center gab-3">
                <span class="iconify text-2xl" data-icon="solar:round-alt-arrow-right-line-duotone"></span>
                Banco de Dados
            </h2><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>MySQL 8.0 ou superior (MariaDB 10.4+ também é compatível)</li>
            </ul><br>

            <h2 class="text-2xl font-semibold flex items-center gab-3">
                <span class="iconify text-2xl" data-icon="solar:round-alt-arrow-right-line-duotone"></span>
                Servidor Web
            </h2><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Apache 2.4 ou superior (Requer ativação do módulo mod_rewrite)</li>
                <li>Alternativamente: Nginx 1.18 ou superior (configuração peersonalizada)</li>
            </ul><br>
            </p>
        </div>
    </section>
    <script src="src/js/main.js"></script>
</section>