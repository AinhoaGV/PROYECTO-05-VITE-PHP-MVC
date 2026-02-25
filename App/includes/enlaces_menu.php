<ul>
    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_inicio ?>" title="<?= $menu_title_inicio ?>"><?= $menu_inicio ?></a></li>

    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_quienes_somos ?>" title="<?= $menu_title_quienes_somos ?>"><?= $menu_quienes_somos ?></a></li>

    <li>
        <a href="<?=$_ENV['RUTA']?><?= $ruta_productos ?>" title="<?= $menu_title_productos ?>"><?= $menu_productos ?></a>
        <ul class="sublista">
            <li><a href="<?=$_ENV['RUTA']?><?= $ruta_panaderia ?>" title="<?= $menu_title_panaderia ?>"><?= $menu_panaderia ?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?= $ruta_pasteleria ?>" title="<?= $menu_title_pasteleria ?>"><?= $menu_pasteleria ?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?= $ruta_torrijas ?>" title="<?= $menu_title_torrijas ?>"><?= $menu_torrijas ?></a></li>
        </ul>
    </li>

    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_contacto ?>" title="<?= $menu_title_contacto ?>"><?= $menu_contacto ?></a></li>

    <?php
    if(isset($_SESSION['LOGIN']) && $_SESSION['LOGIN']=="1"){
    ?>
    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_zona_admin ?>" title="<?= $menu_title_zona_admin ?>"><?= $menu_zona_admin ?></a></li>
    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_logout ?>" title="<?= $menu_title_logout ?>"><?= $menu_logout ?></a></li>
    <?php
    }else{
    ?>
    <li><a href="<?=$_ENV['RUTA']?><?= $ruta_zona_admin ?>" title="<?= $menu_title_zona_admin ?>"><?= $menu_login ?></a></li>
    <?php
    }
    ?>

</ul>
