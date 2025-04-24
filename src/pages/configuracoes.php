<section class="p-4 flex-1 ml-0 sm:ml-64 sm:p-8">
    <button id="menu-toggle" class="md:hidden p-2 fixed top-2 right-3 text-slate-700">
        <span class="iconify text-4xl" data-icon="solar:hamburger-menu-line-duotone"></span>
    </button>
    <h2 class="text-2xl font-semibold">Configurações Mínimas</h2>

    <section class="mt-8 bg-white p-6 rounded shadow flex flex-col items-center gap-2 sm:flex-row">
        <div>
            <p>Para garantir o funcionamento adequado da aplicação, certifique-se de que o ambiente onde ela será executada atenda aos seguintes requisitos mínimos:<br><br>
            
            <h2 class="text-2xl font-semibold">🖥️Sistema Operacional</h2><br>
                
                Windows 10 ou superior (versões de 64 bits recomendadas)<br><br>

            <h2 class="text-2xl font-semibold">🐘PHP</h2><br>

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

            <h2 class="text-2xl font-semibold">📦Framework</h2><br>

            Laravel 12<br><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Requer Composer 2.x ou superior</li>
                <li>Recomendado utilizar o Laravel Mix ou Vite para gestão de assets (JS/CSS)</li>
            </ul><br>

            <h2 class="text-2xl font-semibold">🗄️Banco de Dados</h2><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>MySQL 8.0 ou superior (MariaDB 10.4+ também é compatível)</li>
                <li>O usuário do banco de dados deve ter permissões de CREATE,SELECT,INSERT,UPDATE,DELETE,DROP,ALTER</li>
            </ul><br>

            <h2 class="text-2xl font-semibold">🔧Servidor Web</h2><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Apache 2.4 ou superior (Requer ativação do módulo mod_rewrite)</li>
                <li>Alternativamente: Nginx 1.18 ou superior (configuração peersonalizada)</li>
            </ul><br>

            <h2 class="text-2xl font-semibold">📁Permissões de Pasta (em ambientes de desenvolvimento ou produção)</h2><br>

            As seguintes pastas devem ter permissões de leitura e escrita:<br><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>/storage</li>
                <li>/bootstrap/cache</li>
            </ul><br>

            <h2 class="text-2xl font-semibold">🧪Requisitos Adicionais</h2><br>

            <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Composer(para instalação e gerenciamento de dependências PHP)</li>
                <li>Navegador moderno atualizado (Chrome,Firefox,Edge)</li>
                <li>Editor de código recomendado: VSCode ou PHPStorm (opcional, mas útil para desenvolvedores)</li>
            </ul><br>
            </p>
        </div>
    </section>
    <script src="src/js/main.js"></script>
</section>