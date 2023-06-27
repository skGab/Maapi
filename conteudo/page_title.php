<?php

// Titulo
function title($page)
{
    if ($page === "/" or $page === '/index.php') {
        echo 'Maapi - Home';
    }
    if ($page === "/pages/sobre-nos.php") {
        echo 'Maapi - Sobre Nós ';
    }
    if ($page === "/pages/polar-tracker.php") {
        echo 'Maapi - Polar Tracker';
    }
    if ($page === "/pages/aplicacoes.php") {
        echo 'Mappi - Aplicações';
    }
    if ($page === "/pages/contato.php") {
        echo 'Maapi - Contato';
    }
}

