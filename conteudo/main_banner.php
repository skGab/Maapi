<?php

function conteudo($page)
{
    if ($page === "/") {
        echo '
        <h1>Somos a MAAPI</h1>
        <p>Uma empresa pioneira e inovadora com soluções de ponta para o monitoramento de produtos e cargas em tempo real</p>';
    }
    if ($page === "/pages/sobre-nos.php") {
        echo '
        <h1>Sobre nós</h1>
        <p>Segurança e eficácia no monitoramento online em tempo real da umidade e temperatura</p>';
    }
    if ($page === "/pages/polar-tracker.php") {
        echo '
        <h1>Polar Tracker</h1>
        <p>Sistema de gerenciamento para a Cadeia Fria</p>';
    }
    if ($page === "/pages/aplicacoes.php") {
        echo '
        <h1>Aplicações</h1>
        <p>Evite prejuízos! Não corra o risco de perder seus produtos e cargas: com o Polar Tracker é possível monitorar a umidade e temperatura de produtos e cargas em tempo real!</p>';
    }
    if ($page === "/pages/contato.php") {
        echo '
        <h1>Contato</h1>
        <p>Entre em contato conosco e fale diretamente com nossos especialistas!</p>';
    }
}
