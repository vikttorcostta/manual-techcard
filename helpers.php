<?php

function roteamentoPaginas(Array $paginas, string $home): void 
{
    $pagina = isset($_GET['pagina']) ? basename($_GET['pagina']) : 'home.php';
    $caminhoPagina = "./src/pages/$pagina";

    if (in_array($caminhoPagina, $paginas, true) && file_exists($caminhoPagina)) {
        include $caminhoPagina;
    } else {
        include $home;
    }
}


// function tituloPaginasDinamico(): void 
// {
//     $titulos = [
//         'Início',
//         'Guia de Instalação'
//     ];

// }