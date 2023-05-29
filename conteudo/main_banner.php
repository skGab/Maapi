<?php

function conteudo($page)
{
    if ($page === "/") {
        echo '
        <h1>Somos a MAAPI</h1>
        <P>Uma empresa pioneira e inovadora com soluções de ponta para o monitoramento de produtos e cargas em tempo real</P>';
    }
    if ($page === "/pages/sobre-nos.php") {
        echo '
        <h1>Sobre nós</h1>
        <P>Segurança e eficácia no monitoramento online em tempo real da umidade e temperatura</P>';
    }
    if ($page === "/pages/polar-tracker.php") {
        echo '
        <h1>Polar Tracker</h1>
        <P>Sistema de gerenciamento para a Cadeia Fria</P>';
    }
}
