<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/productos.js'); ?>

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
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="" class="boton"><?= $hero_cta ?></a>
    </header>

    <main>
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $intro_h2 ?></h2>
            </div>

            <article class="art05">
                <h3><?= $intro_h3 ?></h3>
                <p><?= $intro_p1 ?></p>
                <p><?= $intro_p2 ?></p>
                <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton"><?= $intro_cta ?></a>
            </article>
        </section>

        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $especialidades_h2 ?></h2>
            </div>

            <article class="art01" id="hitoPanes">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Pan artesanal recien horneado en Panaderia Aginaga" title="Panaderia artesanal en Aginaga">
                <div>
                    <h3><?= $pan_h3 ?></h3>
                    <p><?= $pan_p ?></p>
                </div>
            </article>

            <article class="art01 invert" id="hitoPasteles">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pasteles y dulces artesanos de Panaderia Aginaga" title="Pasteleria artesanal en Aginaga">
                <div>
                    <h3><?= $pasteleria_h3 ?></h3>
                    <p><?= $pasteleria_p ?></p>
                </div>
            </article>

            <article class="art01" id="hitoTorrijas">
                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrijas artesanas de Panaderia Aginaga" title="Torrijas tradicionales de Aginaga">
                <div>
                    <h3><?= $torrijas_h3 ?></h3>
                    <p><?= $torrijas_p ?></p>
                </div>
            </article>

        </section>


    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
