<?php
$consultasUsuario = [];
$consultasError = '';

if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] === "1") {
    $correoUsuario = $_SESSION['CORREO'] ?? '';

    if (!empty($correoUsuario)) {
        $con = mysqli_connect($_ENV['BBDD_HOST'], $_ENV['BBDD_USER'], $_ENV['BBDD_PASS'], $_ENV['BBDD_BBDD']);

        if ($con) {
            $con->set_charset("utf8mb4");

            $sql = "SELECT creado_en, nombre, telefono, email, mensaje, idioma, url_origen FROM `consultas_web` WHERE email = ? ORDER BY creado_en DESC";
            $stmt = mysqli_prepare($con, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 's', $correoUsuario);

                if (mysqli_stmt_execute($stmt)) {
                    $resultado = mysqli_stmt_get_result($stmt);

                    if ($resultado) {
                        $consultasUsuario = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                    } else {
                        $consultasError = $error_recuperar;
                    }
                } else {
                    $consultasError = $error_recuperar;
                }

                mysqli_stmt_close($stmt);
            } else {
                $consultasError = $error_preparar;
            }

            mysqli_close($con);
        } else {
            $consultasError = $error_bd;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <?php echo vite_tags('src/js/zonaAdmin.js'); ?>

    <link rel="canonical" href="<?= $_ENV['RUTA'] ?><?= $url ?>">
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

        <?php
        if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
        ?>

            <h2><?= $welcome_h2 ?> <?= $_SESSION['NOMBRE'] ?></h2>
            <p class="mensajeBienvenida"><?= $welcome_p ?></p>

        <?php
        }else{
        ?>
            <article class="artForm">
                <form action="<?=base_path()?>/app/artFormLogin" method="post">

                    <?php
                    if( isset($_GET['error']) ){
                        $error = $_GET['error'];                    
                    }
                    ?>

                    <span class="error"><?php if(isset($error)){echo $login_error;} ?></span>

                    <label for="usuario"><?= $label_usuario ?></label>
                    <input type="text" name="usuario" id="usuario" placeholder="<?= $placeholder_usuario ?>" value="">

                    <label for="pass"><?= $label_pass ?></label>
                    <input type="password" name="password" id="pass" placeholder="<?= $placeholder_pass ?>">    
                    
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">

                    <input type="submit" value="<?= $submit ?>" class="boton">

                    <p><?= $campos_obligatorios ?></p>

                    <a href="<?=$_ENV['RUTA']?>/es/registro"><?= $registro_link ?></a>

                </form>
            </article>
        <?php
        }
        ?>

    </header>

    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
    ?>
    <main>
        <section class="panelConsultas">
            <div class="h2Especial">
                <span></span>
                <h2><?= $consultas_h2 ?></h2>
            </div>

            <article class="tablaConsultas">
                <p class="introConsultas"><?= $consultas_intro ?></p>

                <?php if($consultasError !== ''): ?>
                    <p class="estadoConsultas error"><?= htmlspecialchars($consultasError, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php elseif(empty($consultasUsuario)): ?>
                    <p class="estadoConsultas"><?= $consultas_vacio ?></p>
                <?php else: ?>
                    <div class="tablaResponsive">
                        <table>
                            <thead>
                                <tr>
                                    <th><?= $th_fecha ?></th>
                                    <th><?= $th_nombre ?></th>
                                    <th><?= $th_telefono ?></th>
                                    <th><?= $th_email ?></th>
                                    <th><?= $th_mensaje ?></th>
                                    <th><?= $th_idioma ?></th>
                                    <th><?= $th_url ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($consultasUsuario as $consulta): ?>
                                    <tr>
                                        <td><?= htmlspecialchars(date('d/m/Y H:i', strtotime($consulta['creado_en'])), ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['telefono'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['mensaje'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['idioma'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?= htmlspecialchars($consulta['url_origen'], ENT_QUOTES, 'UTF-8'); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </article>
        </section>
    </main>
    <?php
    }
    ?>

    <?php include $appRoot . '/includes/footer.php'?>

</body>
</html>
