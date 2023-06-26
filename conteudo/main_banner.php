<?php

// CONTEUDO
function conteudo($page)
{
    if ($page === "/" or $page === '/index.php') {
        echo '
        <h1>Somos <br class="d-md-none"> a MAAPI</h1>
        <p class="small">Uma empresa pioneira e inovadora com soluções de ponta <br class="d-none d-md-block"> para o monitoramento de produtos e cargas em tempo real</p>';
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
        <p>Evite prejuízos! Não corra o risco de perder seus produtos e cargas: com o Polar Tracker  <br class="d-none d-md-block"> é possível monitorar a umidade e temperatura de produtos e cargas em tempo real!</p>';
    }
    if ($page === "/pages/contato.php") {
        echo '
        <h1 class="display-2 contato-title mb-3 d-md-none">Contato</h1>
        <h1 class="contato-title mb-3 d-none d-md-block">Contato</h1>
        <p class="contato-text">Entre em contato conosco e <br> fale diretamente com nossos especialistas!</p>';
    }
}

// BANNERS
function banner($page)
{
    if ($page === "/" or $page === "/index.php") {
        echo '
        <img class="w-100 position-absolute top-0 start-0 d-sm-none" src="../assets/images/banners/banner_home_mob.png" alt="Banner Home">

        <img class="w-100 position-absolute top-0 start-0 d-none d-sm-block" src="../assets/images/banners/banner_home_desk.png" alt="Banner Home">
        ';
    }
    if ($page === "/pages/sobre-nos.php") {
        echo '
        <img class="w-100 position-absolute top-0 start-0 d-sm-none" src="../assets/images/banners/banner_sobre_mob.png" alt="Banner Sobre nos">
        
        <img class="w-100 position-absolute top-0 start-0 d-none d-sm-block" src="../assets/images/banners/banner_sobre_desk.png" alt="Banner Sobre nos">
        ';
    }
    if ($page === "/pages/polar-tracker.php") {
        echo '
        <img class="w-100 position-absolute top-0 start-0 d-sm-none" src="../assets/images/banners/banner_polartracker_mob.png" alt="Banner Polar Tracker">
        
        <img class="w-100 position-absolute top-0 start-0 d-none d-sm-block" src="../assets/images/banners/banner_polartracker_desk.png" alt="Banner Polar Tracker">
        ';
    }
    if ($page === "/pages/aplicacoes.php") {
        echo '
        <img class="w-100 position-absolute top-0 start-0 d-sm-none" src="../assets/images/banners/banner_aplicacoes_mob.png" alt="Banner Aplicações">
        
        <img class="w-100 position-absolute top-0 start-0 d-none d-sm-block" src="../assets/images/banners/banner_aplicacoes_desk.png" alt="Banner Aplicações">
        ';
    }
    if ($page === "/pages/contato.php") {
        echo '
        <img class="w-100 position-absolute top-0 start-0 d-md-none" src="../assets/images/banners/banner_contato_mob.png" alt="Banner contato">
        
        <img class="w-100 position-absolute top-0 d-none d-md-block contato_bg" src="../assets/images/banners/banner_contato_desk.png" alt="Banner contato">
        ';
    }
}
