<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/quienesSomos.js'); ?>

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
    <meta name="twitter:url" content="<?= $_ENV['RUTA'] ?><?= $url ?>">

    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php include $appRoot . '/includes/metadatos_globales.php' ?>
</head>
<body>

    <?php include $appRoot . '/includes/body_global.php' ?>

    <?php include $appRoot . '/includes/nav.php' ?>

    <header>        
        <h1><?= $hero_h1 ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Panaderia Aginaga" title="Panaderia Aginaga">
        </div>            
    </header>

    <main>        
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $equipo_h2 ?></h2>
            </div>

            <article class="art05">
                <h3><?= $equipo_h3 ?></h3>
                <p><?= $equipo_p1 ?></p>
                <p><?= $equipo_p2 ?></p>
                <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton" title="Contacta con nosotros"><?= $equipo_cta ?></a>
            </article>

            <article class="art03">
                
                <h3><?= $trato_h3 ?></h3>

                <p><?= $trato_p1 ?></p>

                <p><?= $trato_p2 ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/equipo-de-panaderas-y-panaderos-1800.avif" alt="Amor por nuestro oficio" title="Amor por nuestro oficio">

            </article>

            <article class="art04">
                <h3><?= $fichas_h3 ?></h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4><?= $ficha1_h4 ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-01-1200.avif" alt="Mikel Arrizabalaga - Maestro Panadero" title="Mikel Arrizabalaga">                        
                        <p><?= $ficha1_p ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $ficha2_h4 ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-03-1200.avif" alt="Maria Etxeberria - Maestra Pastelera" title="Maria Etxeberria">                        
                        <p><?= $ficha2_p ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $ficha3_h4 ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-02-1200.avif" alt="Jon Lizarraga - Especialista en Bolleria" title="Jon Lizarraga">                        
                        <p><?= $ficha3_p ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $ficha4_h4 ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-04-1200.avif" alt="Ana Mendizabal - Panadera Artesana" title="Ana Mendizabal">                        
                        <p><?= $ficha4_p ?></p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?= $historia_h2 ?></h2>
            </div>
            <article>
                <div>
                    <h3><?= $historia_h3 ?></h3>
                    <p><?= $historia_p ?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star.svg" alt="Icono historia" title="Nuestra historia">
                            <h4><?= $card1_h4 ?></h4>
                            <p><?= $card1_p ?></p>
                            
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/ribbon.svg" alt="Icono calidad" title="Calidad artesanal">
                            <h4><?= $card2_h4 ?></h4>
                            <p><?= $card2_p ?></p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span><?= $card2_cta ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span><?= $historia_cta ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="Contamos con terraza para poder tomar el cafe" title="">
                    </a>
                </div>
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-en-aginaga-1500.avif" alt="Contamos con terraza para poder tomar el cafe" title="Contamos con terraza para poder tomar el cafe">
                </div>
            </article>
        </section>

    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
