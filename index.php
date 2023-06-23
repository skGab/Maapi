<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/partials/header.php';
?>

<!-- SOBRE -->
<section id="sobre" class="position-relative mx-auto">
    <img loading="lazy" class="detail img-fluid position-absolute top-0 translate-middle-x d-lg-none" src="./assets/icons/detalhe_lateral.png" alt="Detalhe">

    <img loading="lazy" class="detail img-fluid position-absolute start-0 bottom-50 d-none d-lg-block" src="./assets/icons/detalhe_lateral_desk.png" alt="Detalhe">


    <div class="container px-4 py-5">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-6 mb-4">
                <h2 class="h1">Sobre Nós <img loading="lazy" src="./assets/icons/detalhe_maapi.svg" class="img-fluid ms-4" alt="Detalhe Maapi"></h2>

                <p>A Maapi é uma empresa do Grupo Polar, referência há mais de 20 anos em cadeia do frio no Brasil e no Mundo, que atua de maneira dedicada no desenvolvimento soluções inovadoras. Formado por uma equipe técnica altamente qualificada, nosso Centro de Inteligência Tecnológica desenvolveu com exclusividade o <strong>Polar Tracker:</strong> um produto altamente seguro e efetivo para o monitoramento em tempo real da temperatura e umidade de embalagens, câmaras frias, refrigeradores, freezers, veículos e armazéns.</p>
            </div>

            <figure class="col-12 col-lg-5 mb-0 text-center">
                <img loading="lazy" src="./assets/images/industria.png" class="img-fluid d-md-none" alt="Industria">
                <img loading="lazy" src="./assets/images/industria_desk.png" class="img-fluid d-none d-md-block" alt="Industria">
            </figure>
        </div>
    </div>
</section>

<!-- POLAR TRACKER -->
<section id="polar_tracker" class="position-relative d-flex align-items-center">
    <img loading="lazy" class="position-absolute top-0 h-100 w-100 d-md-none" src="./assets/images/bg_polartracker_home.png" alt="Background">

    <img loading="lazy" class="position-absolute top-0 h-100 w-100 d-none d-md-block" src="./assets/images/bg_polartracker_home_desk.png" alt="Background">

    <div class="container px-4 py-4">
        <div class="row">
            <div class="col text-white">
                <h2 class="mb-4 text-white">O Polar <br class="d-md-none"> Tracker</h2>

                <p class="mb-4"><strong class="text-white">Sistema de gerenciamento para cadeia fria.</strong> <br>
                    Solução ideal para o monitoramento em tempo real da <br class="d-none d-md-block"> temperatura e umidade de embalagens, câmeras frias, <br class="d-none d-md-block"> refrigeradores, freezers, veículos e armazéns.</p>

                <button class="px-3 py-1 border-0 rounded-pill small text-secondary">SAIBA MAIS</button>
            </div>
        </div>
    </div>
</section>

<!-- APLICAÇÕES -->
<section id="aplicacoes" class="py-4">
    <div class="container px-4 py-5 ">
        <div class="row align-items-center">
            <figure class="col-12 col-md-6 mb-0 text-center">
                <img loading="lazy" src="/assets/images/aplicacoes.png" class="img-fluid d-md-none" alt="Aplicações">

                <img loading="lazy" src="/assets/images/dispositivo_desk.png" width="480" class="img-fluid d-none d-md-block mx-auto" alt="Aplicações">
            </figure>

            <div class="col-12 col-md-6">
                <h2 class="mb-4">Aplicações</h2>
                <p class="mb-4">Evite prejuízos! Não corra o risco de perder seus produtos e <br class="d-none d-xl-block"> cargas: com o Polar Tracker é possível monitorar a umidade e <br class="d-none d-xl-block"> temperatura de produtos e cargas em tempo real!</p>
                <button class="small text-white border-0 px-3 py-1 rounded-pill bg-secondary">SAIBA MAIS</button>
            </div>
        </div>
    </div>
</section>

<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/partials/footer.php';
?>