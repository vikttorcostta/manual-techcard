<section class="p-4 flex-1 ml-0 sm:ml-64 sm:p-8">
    <button id="menu-toggle" class="md:hidden p-2 fixed top-2 right-3 text-slate-700">
        <span class="iconify text-4xl" data-icon="solar:hamburger-menu-line-duotone"></span>
    </button>
    <h2 class="text-2xl font-semibold">Instalação e Acesso</h2>

    <section class="mt-8 bg-white p-6 rounded shadow flex flex-col items-center gap-2 sm:flex-row">
        <div>
            <p>
                Para instalar o sistema corretamente, siga os passos abaixo:<br><br>

                <h2 class="text-2xl font-semibold flex items-center gab-3">
                <span class="iconify text-2xl" data-icon="solar:round-alt-arrow-right-line-duotone"></span>
                Requisitos de Ambiente
                </h2><br>

                Antes de iniciar a instalação, certifique-se de possuir:<br><br>

                Um servidor em nuvem ou uma hospedagem tradicional.<br><br>

                Exemplos
                <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Hospedagem tradicional: Hostinger, HostGator</li>
                <li>Servidor em nuvem: AWS, Laravel Cloud, DigitalOcean</li>
                </ul><br>

                Versão do PHP compatível<br><br>

                <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Verifique a versão do PHP exigida pelo sistema</li><br>
                <img src="imagens/Configuração PHP.jpeg">
                <li>Garanta que a hospedagem ou servidor esteja com essa versão ativa</li>
                </ul><br>

                Extensões PHP necessárias:<br><br>

                <img src="imagens/print_extensoes.jpeg"><br>

                <h2 class="text-2xl font-semibold flex items-center gab-3">
                <span class="iconify text-2xl" data-icon="solar:round-alt-arrow-right-line-duotone"></span>
                Configuração do Repositório
                </h2><br><br>

                Adicionar a Chave SSH no GitHub<br><br>

                <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Gere uma chave SSH localmente (caso ainda não possua)</li><br>
                <img src="imagens/Print_git_privado.jpeg">
                <li>Acesse seu repositório no Github</li>
                <li>Vá em Configurações > SSH and GPG keys > New SSH key</li><br>
                <img src="imagens/salvando_e_colando_chave.jpeg">
                <li>Cole a chave pública gerada</li>
                <li>Salve a nova chave SSH</li>
                </ul><br><br>

                Confirmar Implantação Automátiva<br><br>

                <ul style="list-style-type: '✔️'; padding-left: 1.5em;">
                <li>Acesse as configurações de repositório no GitHub</li><br>
                <img src="imagens/configurando_chaves.png">
                <li>Vá até seção Webhooks</li>
                <li>Clique em Add webhook</li>
                <li>Copie e cole a URL do Webhook fornecida pelo seu servidor ou serviços de integração contínua</li><br>
                <img src="imagens/colando_chave.png">
                <li>Selecione o evento desejado para o acionamento da implantação (geralmente "push")</li>
                <li>Salve as alterações</li>
                </ul><br><br>
            </p>
        </div>
    </section>
    <script src="src/js/main.js"></script>
</section>