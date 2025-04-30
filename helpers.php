<?php

function roteamentoPaginas(array $paginas, string $home): void
{
    $pagina = isset($_GET['pagina']) ? basename($_GET['pagina']) : 'home.php';
    $caminhoPagina = "./src/pages/$pagina";

    if (in_array($caminhoPagina, $paginas, true) && file_exists($caminhoPagina)) {
        include $caminhoPagina;
    } else {
        include $home;
    }
}


function tituloPaginaDinamico($pagina): string
{
    return match ($pagina) {
        'configuracoes.php' => 'Configurações Mínimas',
        'instalacao.php' => 'Instalação e Acesso',
        'apresentacao.php' => 'Apresentação do Sistema',
        'objetivo.php' => 'Objetivo do Manual',
        'cadastro_login.php' => 'Cadastro e Login',
        'dashboard_navegacao.php' => 'Dashboard e Navegação',
        'modulos.php' => 'Módulos',
        default => 'Página não encontrada'
    };
}