<?php
$contenido404 = (array) json_decode(file_get_contents($appRoot . "/languages/404/$lang.json"));
$contenido404 && extract($contenido404);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/views/404.js'); ?>

    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php include $appRoot . '/includes/metadatos_globales.php' ?>

</head>
<body>
    <?php include $appRoot . '/includes/body_global.php' ?>
    <main>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $logo_alt ?>" title="<?= $logo_title ?>">
        <h1><?= $h1 ?></h1>
        <a href="<?=$_ENV['RUTA']?>/es" class="boton"><?= $cta_inicio ?></a>
    </main>

    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
