<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/inicio.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?= $_ENV['RUTA'] ?><?= $url ?>">

    <!-- Metadatos para Redes Sociales - Open Graph (Facebook, LinkedIn, etc) -->
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:url" content="<?= $_ENV['RUTA'] ?><?= $url ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= $_ENV['RUTA'] ?><?= $og_image ?>">
    <meta property="og:image:alt" content="<?= $og_image_alt ?>">
    <meta property="og:site_name" content="<?= $site_name ?>">
    <meta property="og:locale" content="<?= $lang ?>_<?= strtoupper($lang) ?>">

    <!-- Metadatos para Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $meta_description ?>">
    <meta name="twitter:image" content="<?= $_ENV['RUTA'] ?><?= $og_image ?>">
    <meta name="twitter:url" content="<?= $_ENV['RUTA'] ?><?= $url ?>"

    <!-- Indexacion y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/body_global.php'
    ?>

    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?>

    <!-- HERO01 -->
    <header>
        <h1><?= $hero_h1 ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton"><?= $hero_cta ?></a>
    </header>

    <main>
        <!-- SECCION PRESENTACION -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?= $presentacion_h2 ?></h2>
            </div>

            <article>
                <div>
                    <h3><?= $presentacion_h3 ?></h3>
                    <p><?= $presentacion_p ?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4><?= $card1_h4 ?></h4>
                            <p><?= $card1_p ?></p>
                            <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="moduloBoton01">
                                <span><?= $card1_cta ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4><?= $card2_h4 ?></h4>
                            <p><?= $card2_p ?></p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span><?= $card2_cta ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span><?= $presentacion_cta ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Mas de 100 anos ofreciendo la mejor calidad en Agina" title="Mas de 100 anos ofreciendo la mejor calidad en Agina">
                    </a>
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-pasteleria-aginaga-1500.avif" alt="" title="">
                </div>
            </article>
        </section>

        <!-- SECCION SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $sobre_h2 ?></h2>
            </div>
            <article class="art03">
                <h3><?= $sobre_h3 ?></h3>

                <p><?= $sobre_p1 ?></p>

                <p><?= $sobre_p2 ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="Equipo de panaderos de Aginaga trabajando en el obrador" title="Equipo de panaderos de Aginaga">
            </article>

            <article class="art05">
                <h3><?= $historia_h3 ?></h3>
                <p><?= $historia_p1 ?></p>
                <p><?= $historia_p2 ?></p>
                <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="boton"><?= $historia_cta ?></a>
            </article>

            <article class="art06">
                <div>
                    <h3><?= $servicio_h3 ?></h3>
                    <p><?= $servicio_p1 ?></p>
                    <p><?= $servicio_p2 ?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" title="" class="boton"><?= $servicio_cta ?></a>
                </div>
            </article>

        </section>

        <!-- SECCION PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $productos_h2 ?></h2>
            </div>

            <article class="art02-bis">
                <div class="textos">
                    <h3><?= $productos_h3 ?></h3>
                    <p><?= $productos_p ?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton02">
                        <span><?= $productos_cta ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a Nuestros productos" title="Mas informacion">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPanes" title="Los mejores panes de masa madre">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Pan de masa madre en Usurbil y Aginaga" title="Pan de masa madre en Usurbil y Aginaga">
                        <h4><?= $img_card1_h4 ?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPasteles" title="Pasteleria artesana bajo demanda">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pasteles artesanos: del obrador a tu mesa" title="Pasteles artesanos: del obrador a tu mesa">
                        <h4><?= $img_card2_h4 ?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoTorrijas" title="Torrijas tradicionales a fuego lento">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrijas tradicionales todo el ano" title="Torrijas tradicionales todo el ano">
                        <h4><?= $img_card3_h4 ?></h4>
                    </a>
                </div>
            </article>

            <article class="art01">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/masa-madre.avif" alt="Masa madre de panaderia artesanal" title="Masa madre de panaderia artesanal">
                <div>
                    <h3><?= $masa_h3 ?></h3>
                    <p><?= $masa_p ?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/quienes-somos" class="moduloBoton02">
                        <span><?= $masa_cta ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>

</body>
</html>
