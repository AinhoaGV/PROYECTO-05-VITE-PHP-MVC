<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/zonaAdmin.js'); ?>

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
    <meta name="twitter:url" content="<?= $_ENV['RUTA'] ?><?= $url ?>">

    <!-- Indexacion y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    include $appRoot . '/includes/metadatos_globales.php'
    ?>
    
</head>
<body>

    <?php
    include $appRoot . '/includes/body_global.php'
    ?>

    <?php include $appRoot . '/includes/nav.php' ?>

    <header>        
        <h1><?= $hero_h1 ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>

        <article class="artForm">
            <form action="<?=base_path()?>/app/artFormLogup" method="post">

                <?php
                if( isset($_GET['error']) ){
                    $error = $_GET['error'];                    
                }
                ?>

                <span class="error"><?php if(isset($error)){echo $error;} ?></span>

                <label for="nombre"><?= $label_nombre ?></label>
                <input type="text" name="nombre" id="nombre" placeholder="<?= $placeholder_nombre ?>" value="" autocomplete="off" require>

                <label for="correo"><?= $label_correo ?></label>
                <input type="email" name="correo" id="correo" placeholder="<?= $placeholder_correo ?>" value="" autocomplete="off" require>

                <label for="pass"><?= $label_pass ?></label>
                <input type="password" name="password" id="pass" placeholder="<?= $placeholder_pass ?>" autocomplete="off" require>
                
                <label for="pass2"><?= $label_pass2 ?></label>
                <input type="password" name="passwordrepeat" id="pass2" placeholder="<?= $placeholder_pass2 ?>" autocomplete="off" require>

                <div>
                    <input type="checkbox" name="terminos" id="aceptarTerminos">                        
                    <label for="aceptarTerminos"><?= $label_aceptar ?> <a href="<?=$_ENV['RUTA']?>/es/terminos-legales"><?= $label_terminos_link ?></a></label>
                </div>

                <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                <input type="submit" value="<?= $submit ?>" class="boton">

                <p><?= $campos_obligatorios ?></p>
                
            </form>
        </article>       
    </header>

    <?php include $appRoot . '/includes/footer.php'?>

</body>
</html>
