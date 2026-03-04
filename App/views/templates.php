<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 3 Recursos HTML y SCSS</title>
    <?php echo vite_tags('src/js/templates.js'); ?>
</head>
<body>
    <!-- NAV -->
    <?php include $appRoot . '/includes/nav.php' ?>


    <!-- HERO01 -->
    <header>        
        <h1>Proyecto 3</h1>
        <div>            
            <img src="https://dummyimage.com/500x300" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>
        

        <!-- Sección 01 -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la sect01</h2>
            </div>
            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae vitae amet rem earum maiores similique provident dolorem sunt odit sequi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Leer más</span>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Leer más</span>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="" class="moduloBoton02">
                        <span>Contacta con nosotros</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="https://dummyimage.com/1000x1500" alt="">
                </div>
            </article>
        </section>


        <!-- Sección sect02 -->
        <section class="sect02"> 
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la sect02</h2>
            </div>
            <div class="sect02-content">
                <ul>
                    <li>
                        <a href="tel:+34943123123" title="Llámanos al 943 123 123" target="_blank">
                            <img src="<?=$_ENV['RUTA'];?>/assets/img/system/call.svg" alt="Llámanos al 943 123 123" title="Llámanos al 943 123 123" width="20" height="20"> 
                            <span>943 123 123</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://api.whatsapp.com/send/?phone=34628749350" title="Escríbenos al whatsapp 600 123 123" target="_blank">
                            <img src="<?=$_ENV['RUTA'];?>/assets/img/system/logo-whatsapp.svg" alt="Escríbenos al whatsapp 600 123 123" title="Escríbenos al whatsapp 600 123 123" width="20" height="20"> 
                            <span>600 123 123</span>
                        </a>
                    </li>       

                    <li>
                        <a href="mailto:aranaz@gmail.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" target="_blank">
                            <img src="<?=$_ENV['RUTA'];?>/assets/img/system/mail.svg" alt="Mándanos un correo a la siguiente dirección correo@correo.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" width="20" height="20"> 
                            <span>correo@correo.com</span>
                        </a>
                    </li>

                    <li>
                        <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" target="_blank">
                            <img src="<?=$_ENV['RUTA'];?>/assets/img/system/location.svg" alt="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" width="20" height="20"> 
                            <span>Paseo Portuetxe 23b<br>413 Donostia</span>
                        </a>
                    </li>

                    
                </ul>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10923.690028247327!2d-2.0104242426659686!3d43.296692429058076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51b013f0513629%3A0x57e4ff3311f619d9!2s%C3%81rea%20Escuela%20de%20Dise%C3%B1o%20y%20Nuevas%20Tecnolog%C3%ADas!5e1!3m2!1ses!2ses!4v1749486263845!5m2!1ses!2ses" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section>
            <!-- H2 especial -->
            <div class="h2Especial">
                <span></span>
                <h2>Encabezado h2 de la primera sección</h2>
            </div>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="https://dummyimage.com/1000x700" alt="">
                <div>
                    <h3>Encabezado h3 artículo tipo art01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Conócenos</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>

            <!-- Artículo 02 -->
            <article class="art02">

                <div class="textos">
                    <h3>Encabezado h3 del art02</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae repudiandae obcaecati magni odio eius maxime iste expedita? Cum vel ad nihil laborum. Nobis unde aperiam rerum pariatur dignissimos, quam consequatur.</p>
                    <!-- <a href="" class="boton">Más info</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>

                <div class="imagenes">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                </div>

            </article>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3>La mejor calidad en productos realizados cada día</h3>                  
                    <p>Nuestra carta de productos se actualiza cada estación, pero se fundamenta en tres pilares que definen nuestra identidad. En primer lugar, el <b>pan de masa madre</b> que fermenta durante 24 horas, desarrollando una corteza crujiente y un alveolado irregular lleno de sabor y nutrientes: es el favorito de quienes nos buscan como “<b>panadería en Aginaga</b>” o “<b>pan masa madre en Usurbil</b>”. En segundo lugar, nuestros <b>pasteles artesanos</b>, elaborados con mantequilla y huevos de caserío, sin aromas artificiales, con rellenos de temporada como crema de avellana de Navarra o compota de manzana reineta. Finalmente, las <b>torrijas</b>, inspiradas en la receta de la amona pero disponibles todo el año; las servimos con miel de azahar o con un delicado almíbar de vainilla bourbon que las hace inolvidables. Cada producto cuenta con su propio proceso cuidadoso, fichas de alérgenos actualizadas y la posibilidad de <b>reserva online</b> para que llegues y lo tengas listo. Además, nuestras famosas <b>torrijas de Aginaga</b> pueden reservarse en línea para cualquier celebración, destacando nuestra <b>panadería en Aginaga</b> como la opción preferida para un dulce tradicional.</p>
                    <a href="./productos-panaderia.php" class="moduloBoton02">
                        <span>Más información</span>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/arrow-forward-outline.svg" alt="Ir a Nuestros productos" title="Más información">
                    </a>
                </div>

                <div class="imagenes">                    
                    <a href="<?=$_ENV['RUTA'];?>/es/productos" title="Los mejores panes de masa madre">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="Pan de masa madre en Usurbil y Aginaga" title="Pan de masa madre en Usurbil y Aginaga">
                        <h4>Panadería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA'];?>/es/productos" title="Pastelería artesana bajo demanda">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="Pasteles artesanos: del obrador a tu mesa" title="Pasteles artesanos: del obrador a tu mesa">
                        <h4>Pastelería</h4>
                    </a>
                    <a href="<?=$_ENV['RUTA'];?>/es/productos" title="Torrijas tradicionales a fuego lento">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="Torrijas tradicionales todo el año" title="Torrijas tradicionales todo el año">
                        <h4>Torrijas</h4>
                    </a>                    
                </div>
            </article>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Encabezado h3 del art03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

            <!-- artículo 4 -->
            <article class="art04">
                <h3>ARTÍCULO art04</h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Encabezado h4</h4>
                        <img src="https://dummyimage.com/90x90" alt="" title="">                        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore libero exercitationem omnis quod placeat cumque nobis aspernatur illo! Accusamus, labore.</p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3>Encabezado art05</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis porro libero doloribus necessitatibus explicabo nostrum, itaque excepturi reprehenderit magni alias.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et qui laboriosam voluptas, maxime possimus ab dolor aliquam nobis repellendus voluptatem vero sed explicabo totam quaerat dolores veritatis fuga quibusdam cumque.</p>
                <a href="" class="boton">CTA</a>
            </article>

            <!-- artículpo 06 -->
            <article class="art06">
                <div>
                    <h3>Artículo 06 Lorem ipsum dolor sit. </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit dolorem soluta molestiae autem ipsam deleniti adipisci. Eius adipisci quo, quae officia quod rerum sequi, aliquid autem perspiciatis deleniti, laudantium nihil.</p>
                    <a href="#" title="" class="boton">CTA</a>
                </div>     
            </article>

            <!-- Artículo 07 -->
            <article class="art07">
                <h3>(h3) ART 07</h3>

                <img
                srcset="
                https://dummyimage.com/900x900 900w,
                https://dummyimage.com/1800x1100 1800w,
                https://dummyimage.com/2560x1200 2560w
                "
                sizes="
                (width <= 900px) 700px,
                (width <= 1800px) 1200px,
                2560px"
                src="
                https://dummyimage.com/900x900"
                width="900"
                alt="" title="">

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quod odio totam illum hic quis quo, libero aut ab soluta, molestias expedita iste saepe, tenetur ad eligendi omnis explicabo obcaecati quae enim doloribus quaerat mollitia. Amet autem soluta adipisci corporis eaque reprehenderit, provident, dolorum deserunt, voluptas suscipit laudantium molestiae. Consectetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat libero perferendis dolorum voluptas recusandae rem incidunt ipsam, veniam, amet quo numquam sunt, necessitatibus quasi laboriosam voluptates enim adipisci ducimus alias vel a. Ullam alias maxime voluptate praesentium. Odit, nostrum deserunt.</p>
                <a href="#" class="boton">CTA</a>
            </article>

            <!-- Artículo 08-->
            <article class="art08">
                <h3>H3 ART 08</h3>

                <div>
                    <div class="contenedor-lista">
                        <h4>h4</h4>
                        <ul>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="contenedor-lista">
                        <h4>h4</h4>
                        <ul>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                            <li>
                                <img src="<?=$_ENV['RUTA'];?>/assets/img/system/check.svg" alt="">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
            <!--art09-->
            <article class="art09">
            <h3>H3 ART 09</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nesciunt quo ipsa expedita optio dolor voluptate ad tenetur in! Eligendi rerum deserunt voluptate officiis voluptas, earum perferendis? Temporibus non adipisci dignissimos. Aliquam exercitationem vitae saepe beatae veniam, ad distinctio ea, omnis debitis ullam quam laboriosam dignissimos praesentium. Saepe, nulla eum.</p>
            <div>
                <div class="ficha">
                <img src="https://dummyimage.com/32x32" alt="">
                <h4>h4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                </div>
                <div class="ficha">
                <img src="https://dummyimage.com/32x32" alt="">
                <h4>H4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                </div>
                <div class="ficha">
                <img src="https://dummyimage.com/32x32" alt="">
                <h4>H4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                </div>
                <div class="ficha">
                <img src="https://dummyimage.com/32x32" alt="">
                <h4>H4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                </div><div class="ficha">
                <img src="https://dummyimage.com/32x32" alt="">
                <h4>H4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                </div>
                <div class="ficha">
                <img src="https://dummyimage.com/32x32" alt="">
                <h4>H4</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, dolores.</p>
                </div>
            </div>
            </article>
            <!-- art10 -->
            <article class="art10">
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            <div>
                <img src="<?=$_ENV['RUTA'];?>/assets/img/vistas/productos/pan.avif" alt="Pan">
            </div>
            </article>
            <!-- art11 -->
            <article class="art11">
            <h3>(h3)</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, voluptatibus corporis, culpa inventore possimus fugit expedita quidem nisi voluptas sit autem magnam repellat dignissimos vitae doloribus dolor dolorum fugiat dolore quaerat qui alias maiores commodi. Dignissimos, fuga error! Sed aperiam numquam iste ad aliquam quibusdam reprehenderit rem aut omnis nobis.</p>
            <div>
                <div class="ficha">
                <img src="https://dummyimage.com/300x300" alt="">
                <div>
                    <h4>Encabezado h4</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, reprehenderit!</p>
                    <p>Lorem, ipsum.</p>
                </div>   
                </div>
                <div class="ficha">
                <img src="https://dummyimage.com/300x300" alt="">
                <div>
                    <h4>Encabezado h4</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, reprehenderit! Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Lorem, ipsum.</p>
                </div>   
                </div>
                <div class="ficha">
                <img src="https://dummyimage.com/300x300" alt="">
                <div>
                    <h4>Encabezado h4</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, reprehenderit!</p>
                    <p>Lorem, ipsum.</p>
                </div>   
                </div>
                <div class="ficha">
                <img src="https://dummyimage.com/300x300" alt="">
                <div>
                    <h4>Encabezado h4</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda, reprehenderit!</p>
                    <p>Lorem, ipsum.</p>
                </div>   
                </div>
            </div>
            </article>
            <!--art12-->
            <article class="art12">
            <img src="https://dummyimage.com/500x500" alt="">
            <div>
                <h3>(h3)</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda autem alias velit architecto est consequatur. Eius fuga cupiditate cumque nisi! Pariatur commodi cupiditate consectetur iure eos et officia cum delectus perspiciatis. Maxime beatae alias atque, voluptatibus porro consequuntur ex, sapiente, nam quisquam minima nulla. Rerum quis natus recusandae ut dolorum.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quis cupiditate obcaecati enim fugit a. Quaerat commodi laborum sint obcaecati.</p>
                <a href="#" class="boton">CTA</a>
            </div>
            </article>
            <!--art12 reverse-->
            <article class="art12 reverse">
            <img src="https://dummyimage.com/500x500" alt="">
            <div>
                <h3>(h3)</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda autem alias velit architecto est consequatur. Eius fuga cupiditate cumque nisi! Pariatur commodi cupiditate consectetur iure eos et officia cum delectus perspiciatis. Maxime beatae alias atque, voluptatibus porro consequuntur ex, sapiente, nam quisquam minima nulla. Rerum quis natus recusandae ut dolorum.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quis cupiditate obcaecati enim fugit a. Quaerat commodi laborum sint obcaecati.</p>
                <a href="#" class="boton">CTA</a>
            </div>
            </article>

            <!-- artForm -->
            <article class="artForm">
                <h3>H3</h3>

                <!-- Al abrir este otro archivo, genero otro scope, se reseta y limpia la memoria en el servidor -->
                <form action="<?=base_path()?>/app/artForm" method="post" id="idForm">

                    <?php
                    if( isset($_GET['campo']) ){
                        // si entro es que viene un error marcado en la url con query string
                        $campo = $_GET['campo'];
                        $error = $_GET['error'];
                        $nombre = $_GET['nombre'];
                        $tel = $_GET['tel'];
                        $email = $_GET['email'];
                        $mensaje = $_GET['mensaje'];
                    }

                    $errorCampo = '';
                    if (isset($campo, $error)) {
                        $errorCampo = sprintf('Hay un error en el campo %s de tipo %s', $campo, $error);
                    }
                    ?>

                    <span class="error"><?php if(isset($campo) && $campo == "nombre"){echo $errorCampo;} ?></span>
                    <label for="nombre">Nombre *</label>
                    <input type="text" class='<?php if(isset($campo) && $campo == "nombre"){ echo "inputError";} ?>' name="nombre" id="nombre" placeholder="* Escribe tu nombre" value="<?php if(isset($nombre)){echo $nombre;}?>">

                    <span class="error"><?php if( isset($campo) && $campo == "telefono"){echo $errorCampo;} ?></span>
                    <label for="tel">Telefono</label>
                    <input type="tel" class='<?php if(isset($campo) && $campo == "telefono"){ echo "inputError";} ?>' name="tel" id="tel" placeholder="Aqui tu telefono" value="<?php if(isset($tel)){echo $tel;}?>">

                    
                    <span class="error"><?php if( isset($campo) && $campo == "email"){echo $errorCampo;} ?></span>
                    <label for="email">Email *</label>
                    <input type="email" class='<?php if(isset($campo) && $campo == "email"){ echo "inputError";} ?>' name="email" id="email" placeholder="* Correo electronico" value="<?php if(isset($email)){echo $email;}?>">


                    <span class="error"><?php if( isset($campo) && $campo == "mensaje"){echo $errorCampo;} ?></span>
                    <label for="mensaje">Comentarios</label>
                    <textarea name="mensaje" class='<?php if(isset($campo) && $campo == "mensaje"){ echo "inputError";} ?>' id="mensaje" placeholder="Escribe aqui tu mensaje"><?php if(isset($mensaje)){echo $mensaje;}?></textarea>

                    <span class="error"><?php if( isset($campo) && $campo == "terminos"){echo "Para poder enviar una consulta, debes aceptar los terminos";} ?></span>
                    <div>
                        <input type="checkbox" name="terminos" id="aceptarTerminos">                        
                        <label for="aceptarTerminos">Aceptar <a href="<?=$_ENV['RUTA']?>/es/terminos-legales">terminos y condiciones de privacidad</a></label>
                    </div>

                    <!-- CAPTCHA -->
                    <span class="error"><?php if(isset($campo) && $campo == "captcha"){echo "No has resuelto correctamente el Captcha";} ?></span>
                    <div>
                        <label for="respUser">Resuelve:</label>

                        <!-- campos que rellenamos desde js con numeros random -->
                        <span id="num1">XX</span>
                        <span>+</span>
                        <span id="num2">XX</span>
                        
                        <!-- campo que debe rellenar ewl usuario con la solucion -->
                        <input type="text" name="respUser" id="respUser">

                        <!-- campo oculto con la respuesta correcta asignada desde js -->
                        <input type="hidden" name="respSystem" id="respSystem" value="XXXX">
                    </div>

                    <!-- input oculto donde el value es el valor de $lang, ergo el idioma -->
                    <input type="text" name="inputIdioma" value="<?= $lang?>" style="display:none;">
                    <!-- otro input oculto -->
                    <input type="text" name="inputUrl" value="<?= $url?>" style="display:none;">
                    

                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                </form>

            </article>

            <!-- artForm02 -->
            <article class="artForm02" id="artForm02">
                <?php
                // comprobar si hay variables get en la url
                // si hay variables las voy a recoger aquí
                //
                if(isset($_GET["error"])){
                    $error = $_GET["error"];
                    $campo = $_GET["campo"];
                    $nombre = $_GET["nombre"];
                    $telefono = $_GET["telefono"];
                    $email = $_GET["email"];
                    $mensaje = $_GET["mensaje"];
                }
                ?>
                
                <h3>h3</h3>
                <div>
                <div class="contenedor-form">
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                    <?php if(isset($_GET["envio"]) && $_GET["envio"] == "ok"){ ?>
                    <p class="exito">Tu mensaje ha sido enviado correctamente</p>
                    <?php }else{ ?>
                    <form action="<?=base_path()?>/app/artForm02" method="post" id="idForm02">
                    <?php
                        if(isset($error)){
                    ?>
                        <p class='error'>Hay un error del tipo <?=$error?> en el campo <?=$campo?></p>
                    <?php
                        }
                    ?>
                    
                    <!--nombre-->
                    <label for="nombre">Nombre *</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Escribe aquí tu nombre *" value="<?php if(isset($error)){echo $nombre;} ?>">

                    <!--telefono-->
                    <label for="telefono">Teléfono *</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Escribe aquí tu teléfono *" value="<?php if(isset($error)){echo $telefono;} ?>">

                    <!--email-->
                    <label for="email">Correo electrónico *</label>
                    <input type="text" id="email" name="email" placeholder="Escribe aquí tu correo electrónico *" value="<?php if(isset($error)){echo $email;} ?>">

                    <!--mensaje-->
                    <label for="mensaje">Tu mensaje *</label>
                    <textarea name="mensaje" id="mensaje" placeholder="Escribe aquí tu mensaje *"><?php if(isset($error)){echo $mensaje;} ?></textarea>

                    <!--terminos-->
                    <div class="horizontal">
                        <label for="terminos">Aceptar términos y condiciones de la privacidad *</label>
                        <input type="checkbox" name="terminos" id="terminos">
                    </div>
                    
                    
                    <div class="horizontal">
                        <!--captcha-->
                        <span id="num1Form02"></span>
                        <span id="operadorForm02"></span>
                        <span id="num2Form02"></span>
                        <span>=</span>
                        <input type="hidden" name="respSystemForm02" id="respSystemForm02" value="">
                        <input type="text" name="respUserForm02" id="respuestaForm02" placeholder="Resultado" autocomplete="off">
                    </div>
                    <input type="hidden" name="lang" value="<?= $lang ?>">
                    <input type="hidden" name="url" value="<?= $url ?>">
                    <input type="submit" value="Enviar" class="boton">
                    </form>
                    <?php }?>
                </div>
                
                <div class="contenedor-info">
                    <ul>
                    <li>
                        <a href="tel:+34943000000" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-phone.svg" alt="">
                        <span>943000000</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/610058776" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-whatsapp.svg" alt="">
                        <span>666666666</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://maps.app.goo.gl/2XTGC8KXb9mipHun7" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-address.svg" alt="">
                        <span>Calle de la amargura, 20800 Zarautz (Gipuzkoa)</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:ainhoa.gomez+1@gmail.com" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                        <span>ainhoa.gomez+1@gmail.com</span>
                        </a>
                    </li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5808.947443853325!2d-2.1690286437178394!3d43.28340018018128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1768584282460!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>
            </article>

            <!-- artForm03 -->
            <article class="artForm03">        
                <h3>H3 con AJAX</h3>
                <div>
                <div class="contenedor-form">
                    <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                    <div id="modal_envio_ok" class="modal_envio_ok">
                    <div>
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                        <h4 id="modal_envio_ok_msg" class="modal_envio_ok_msg">Gracias por tu email</h4>
                        <button id="volver_al_formulario" class="boton">Volver al formulario</button>
                    </div>
                    </div>
                    <form id="idFormAjax">
                    <p class="error" id="errorForm03"></p>
                    <!--nombre-->
                    <label for="nombreAjax">Nombre *</label>
                    <input type="text" id="nombreAjax" name="nombre" placeholder="Escribe aquí tu nombre *" value="<?php if(isset($error)){echo $nombre;} ?>">

                    <!--telefono-->
                    <label for="telefonoAjax">Teléfono *</label>
                    <input type="tel" id="telefonoAjax" name="telefono" placeholder="Escribe aquí tu teléfono *" value="<?php if(isset($error)){echo $telefono;} ?>">

                    <!--email-->
                    <label for="emailAjax">Correo electrónico *</label>
                    <input type="text" id="emailAjax" name="email" placeholder="Escribe aquí tu correo electrónico *" value="<?php if(isset($error)){echo $email;} ?>">

                    <!--mensaje-->
                    <label for="mensajeAjax">Tu mensaje *</label>
                    <textarea name="mensaje" id="mensajeAjax" placeholder="Escribe aquí tu mensaje *"><?php if(isset($error)){echo $mensaje;} ?></textarea>

                    <!--terminos-->
                    <div class="horizontal">
                        <label for="terminosAjax">Aceptar términos y condiciones de la privacidad *</label>
                        <input type="checkbox" name="terminos" id="terminosAjax">
                    </div>
                    
                    
                    <div class="horizontal">
                        <!--captcha-->
                        <span id="num1ajax"></span>
                        <span id="operadorajax"></span>
                        <span id="num2ajax"></span>
                        <span>=</span>
                        <input type="hidden" name="respSystem" id="respSystemajax" value="">
                        <input type="text" name="respUser" id="respuestaajax" placeholder="Resultado" autocomplete="off">
                    </div>
                    <input type="hidden" name="lang" value="<?= $lang ?>">
                    <input type="hidden" name="url" value="<?= $url ?>">
                    <input type="submit" value="Enviar" class="boton" id="btnEnviarAjax">
                    </form>
                    
                    <div class="moduloLoader01" id="moduloLoader01">
                    <!-- Loader 10 -->

                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                        <path fill="#000" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform 
                            attributeName="transform" 
                            attributeType="XML" 
                            type="rotate"
                            dur="1s" 
                            from="0 50 50"
                            to="360 50 50" 
                            repeatCount="indefinite" />
                        </path>
                    </svg>
                    </div>
                </div>
                
                <div class="contenedor-info">
                    <ul>
                    <li>
                        <a href="tel:+34943000000" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-phone.svg" alt="">
                        <span>943000000</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/610058776" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-whatsapp.svg" alt="">
                        <span>666666666</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://maps.app.goo.gl/2XTGC8KXb9mipHun7" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-address.svg" alt="">
                        <span>Calle de la amargura, 20800 Zarautz (Gipuzkoa)</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:ainhoa.gomez+1@gmail.com" target="_blank">
                        <img src="<?=$_ENV['RUTA'];?>/assets/img/system/ico-mail.svg" alt="">
                        <span>ainhoa.gomez+1@gmail.com</span>
                        </a>
                    </li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5808.947443853325!2d-2.1690286437178394!3d43.28340018018128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1768584282460!5m2!1ses!2ses" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>
            </article>

        </section>
               
    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
