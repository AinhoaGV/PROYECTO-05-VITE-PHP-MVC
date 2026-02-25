<footer>
    <div>
        <div class="cajaInfo">
            <?php include $appRoot . '/includes/enlaces_menu.php' ?>
        </div>

        <div class="cajaInfo">
            <ul>
                <li><a href="<?= $footer_url_portfolio ?>" title="<?= $footer_title_portfolio ?>"><?= $footer_text_portfolio ?></a></li>
                <li><a href="<?= $footer_url_academia ?>" title="<?= $footer_title_academia ?>"><?= $footer_text_academia ?></a></li>
            </ul>
            <div class="rrss">
                <a href="<?= $rrss_url_facebook ?>" title="<?= $rrss_title_facebook ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-facebook.svg" alt="<?= $rrss_alt_facebook ?>" title="<?= $rrss_title_facebook ?>" width="30" height="30">
                </a>

                <a href="<?= $rrss_url_linkedin ?>" title="<?= $rrss_title_linkedin ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-linkedin.svg" alt="<?= $rrss_alt_linkedin ?>" title="<?= $rrss_title_linkedin ?>" width="30" height="30">
                </a>

                <a href="<?= $rrss_url_instagram ?>" title="<?= $rrss_title_instagram ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-instagram.svg" alt="<?= $rrss_alt_instagram ?>" title="<?= $rrss_title_instagram ?>" width="30" height="30">
                </a>

                <a href="<?= $rrss_url_youtube ?>" title="<?= $rrss_title_youtube ?>" target="_blank">
                    <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-youtube.svg" alt="<?= $rrss_alt_youtube ?>" title="<?= $rrss_title_youtube ?>" width="30" height="30">
                </a>
            </div>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="<?= $contact_url_tel ?>" title="<?= $contact_title_tel ?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/call.svg" alt="<?= $contact_title_tel ?>" title="<?= $contact_title_tel ?>" width="20" height="20">
                        <span><?= $contact_text_tel ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= $contact_url_whatsapp ?>" title="<?= $contact_title_whatsapp ?>" target="_blank" class="telefono">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/logo-whatsapp.svg" alt="<?= $contact_title_whatsapp ?>" title="<?= $contact_title_whatsapp ?>" width="20" height="20">
                        <span><?= $contact_text_whatsapp ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= $contact_url_email ?>" title="<?= $contact_title_email ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/mail.svg" alt="<?= $contact_title_email ?>" title="<?= $contact_title_email ?>" width="20" height="20">
                        <span><?= $contact_text_email ?></span>
                    </a>
                </li>

                <li>
                    <a href="<?= $contact_url_direccion ?>" title="<?= $contact_title_direccion ?>" target="_blank">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/location.svg" alt="<?= $contact_title_direccion ?>" title="<?= $contact_title_direccion ?>" width="20" height="20">
                        <span><?= $contact_text_direccion_linea1 ?><br><?= $contact_text_direccion_linea2 ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $footer_logo_alt ?>" title="<?= $footer_logo_title ?>" width="200" height="80">
        <div>
            <p><?= $footer_desc ?></p>
            <div id="zonaTerminos">
                <a href="<?=$_ENV['RUTA']?><?= $ruta_terminos_legal ?>"><?= $footer_legal ?></a>
                <a href="<?=$_ENV['RUTA']?><?= $ruta_terminos_cookies ?>"><?= $footer_cookies ?></a>
                <a href="<?=$_ENV['RUTA']?><?= $ruta_terminos_privacidad ?>"><?= $footer_privacidad ?></a>
            </div>
            <p>&copy; <?php echo $anio?> <?= $footer_copyright ?></p>
        </div>
    </div>
</footer>
