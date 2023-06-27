<?php
$current_page =  $_SERVER['REQUEST_URI'];
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/conteudo/main_banner.php';
require $root . '/conteudo/page_title.php'
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Maapi, uma empresa do Grupo Polar, lidera a cadeia do frio há mais de 20 anos com inovação e experiência global. Contando com uma equipe de especialistas, desenvolvemos soluções únicas como o Polar Tracker, garantindo monitoramento preciso e em tempo real de temperatura e umidade para diversas aplicações, desde embalagens a armazéns.">
    <link rel="shortcut icon" href="../assets/icons/detalhe_maapi.svg" type="image/x-icon">

    <title><?php title($current_page) ?></title>

    <!-- STYLE -->
    <link rel="stylesheet" href="../assets/css/compressed/style.min.css">

    <?php if ($current_page == "/pages/contato.php") : ?>
        <link rel="stylesheet" href="../assets/css/compressed/contato.min.css">
    <?php endif ?>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FONT-FAMALY -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet preload" as="style">
</head>

<body class="position-relative">
    <!-- HEADER -->
    <header id="header" class="position-absolute top-0 start-0 w-100">
        <nav class="navbar navbar-expand-lg navbar-light" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
            <div class="container px-4 pt-4 justify-content-between">
                <figure class="mb-0">
                    <a class="navbar-brand" href="/">
                        <?php if ($current_page !== "/pages/contato.php") : ?>
                            <img src="../assets/images/logos/logo_maapi.png" width="95" height="37" class="img-fluid" alt="Logo Maapi">
                        <?php else : ?>
                            <img src="../assets/images/logos/logo_maapi_blue.png" width="97" height="39" class="img-fluid" alt="Logo Maapi">
                        <?php endif ?>
                    </a>
                </figure>

                <button class="navbar-toggler border-0 py-0" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <?php if ($current_page !== "/pages/contato.php") : ?>
                        <img src="../assets/icons/menu-hamburguer.svg" class="img-fluid" alt="Menu Hamburguer">
                    <?php else : ?>
                        <img src="../assets/icons/menu_hamburguer_contato.png" class="img-fluid" alt="Menu Hamburguer">
                    <?php endif ?>
                </button>

                <!-- MENU DESKTOP -->
                <div class="collapse navbar-collapse justify-content-end flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-lg-0 text-end text-uppercase align-items-center gap-4">
                        <!-- HOME -->
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == '/') ? 'active' : '' ?>" href="/">Home</a>
                        </li>

                        <!-- SOBRE NOS -->
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == '/pages/sobre-nos.php') ? 'active' : '' ?>" href="/pages/sobre-nos.php">Sobre nós</a>
                        </li>

                        <!-- POLAR TRACKER -->
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == '/pages/polar-tracker.php') ? 'active' : '' ?>" href="/pages/polar-tracker.php">Polar Tracker</a>
                        </li>

                        <!-- APLICAÇÕES -->
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == '/pages/aplicacoes.php') ? 'active' : '' ?>" href="/pages/aplicacoes.php">Aplicações</a>
                        </li>

                        <!-- CONTATO -->
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == '/pages/contato.php') ? 'active' : '' ?>" href="/pages/contato.php">Contato</a>
                        </li>

                        <li class="nav-item">
                            <a class="portal bg-light px-3 py-2 fw-bold d-none d-lg-block" href="/" title="Portal Maapi">
                                PORTAL MAAPI
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- MENU MOBILE -->
    <div class="offcanvas offcanvas-start px-4" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header pt-5">
            <a href="/">
                <img src="../assets/images/logos/logo_maapi.png" class="img-fluid" alt="Logo Maapi Blue">
            </a>

            <img type="button" src="../assets/icons/close_menu.png" class="img-fluid" alt="Fechar Menu" data-bs-dismiss="offcanvas" aria-label="Close">
        </div>

        <div class="offcanvas-body mt-4">
            <ul class="navbar-nav me-auto mb-lg-0 text-end text-uppercase">
                <hr class="text-white">

                <!-- HOME -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == '/') ? 'active' : '' ?>" href="/">Home</a>
                </li>


                <!-- SOBRE NOS -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == '/pages/sobres-nos.php') ? 'active' : '' ?>" href="/pages/sobre-nos.php">Sobre nós</a>
                </li>


                <!-- POLAR TRACKER -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == '/pages/polar-tracker.php') ? 'active' : '' ?>" href="/pages/polar-tracker.php">Polar Tracker</a>
                </li>


                <!-- APLICAÇÕES -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == '/pages/aplicacoes.php') ? 'active' : '' ?>" href="/pages/aplicacoes.php">Aplicações</a>
                </li>


                <!-- CONTATO -->
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == '/pages/contato.php') ? 'active' : '' ?>" href="/pages/contato.php">Contato</a>
                </li>


                <!-- PÓRTAL -->
                <li class="nav-item mt-2">
                    <a class="portal bg-light px-3 py-2 fw-bold fs-7" href="/" title="Portal Maapi">
                        PORTAL MAAPI
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main id="main">
        <!-- MAIN BANNER -->
        <section id="main_banner" class="position-relative d-flex justify-content-center align-items-end">

            <?php banner($current_page) ?>

            <div class="container px-4 mb-5">
                <div class="row">
                    <div class="col-12 conteudo text-white">
                        <?php conteudo($current_page) ?>
                    </div>
                </div>
            </div>
        </section>