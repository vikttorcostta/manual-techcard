<?php

/**
 * Roteamento das páginas acessadas
 * @param array $paginas
 * @param string $home
 * @return void
 */
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

/**
 * Retorna o título da página dinamicamente
 * @param string $pagina
 * @return string
 */
function tituloPaginaDinamico(string $pagina): string
{
    return match ($pagina) {
        'home.php' => 'vCardHub',
        'configuracoes.php' => 'Configurações Mínimas',
        'instalacao.php' => 'Instalação e Acesso',
        'apresentacao.php' => 'Apresentação do Sistema',
        'objetivo.php' => 'Objetivo do Manual',
        'cadastro_login.php' => 'Cadastro e Login',
        'dashboard_navegacao.php' => 'Dashboard e Navegação',
        'modulos.php' => 'Módulos',
        'novaPagina.php' => 'Nova Página',
        default => 'Página não encontrada'
    };
}