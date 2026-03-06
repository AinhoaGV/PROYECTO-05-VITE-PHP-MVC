<?php

$con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);
$con->set_charset("utf8mb4");

$sql = "SELECT * FROM `productos` WHERE ruta = '$url'";
$resultado = mysqli_query($con, $sql);

if(mysqli_num_rows($resultado) == 1){
    while($fila = mysqli_fetch_array(($resultado))){
        $title = $fila['title'];
        $description = $fila['description'];
        $h1 = $fila['h1'];        
        $srcImg1 = $fila['srcImg1'];
        $altImg1 = $fila['altImg1'];
        $titleImg1 = $fila['titleImg1'];

        $srcImg2 = $fila['srcImg2'];
        $altImg2 = $fila['altImg2'];
        $titleImg2 = $fila['titleImg2'];
        $h2_1  = $fila['h2_1'];
        $parrafo1 = $fila['parrafo1'];
        $parrafo2 = $fila['parrafo2'];
    }
}

unset($resultado, $sql);
mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>">
    <?php echo vite_tags('src/js/producto.js'); ?>

    <link rel="canonical" href="<?= $_ENV['RUTA'] ?><?= $url ?>">
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php include $appRoot . '/includes/metadatos_globales.php' ?>
    
</head>
<body>

    <?php include $appRoot . '/includes/body_global.php' ?>

    <?php include $appRoot . '/includes/nav.php' ?>

    <header>
        <h1><?=$h1?></h1>

        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton"><?= $hero_cta ?></a>

        <img src="<?=$srcImg1?>" alt="<?=$altImg1?>" title="<?=$titleImg1?>" >

    </header>

    <main>
        <section>

            <article class="art01">
                <img src="<?=$srcImg2?>" alt="<?=$altImg2?>" title="<?=$titleImg2?>">
                <div>
                    <h2><?=$h2_1?></h2>
                    <p><?=$parrafo1?></p>
                    <p><?=$parrafo2?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span><?= $art_cta ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $art_cta_alt ?>" title="<?= $art_cta_alt ?>">
                    </a>
                </div>
            </article>

        </section>
    </main>


    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
