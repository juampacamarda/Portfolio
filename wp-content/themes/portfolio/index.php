<?php get_header(); ?>

<main class="site-content">
    <!-- section portada-->
    <section id="portada">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                    <h1>Juampa<br><span>Camarda</span></h1>
                </div>
                <div class="col-12 col-md-4">
                    <img class="juampas" src="<?php echo get_template_directory_uri(); ?>/assets/img/juampasportada.svg" alt="">
                </div>
                <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                    
                    <a class="btn-portada desarro-btn" href="#Perfil-1"> DESARROLLADOR<br>FRONT-END</a>
                    <a class="btn-portada comics-btn" href="#Perfil-2">HISTORIETISTA</a>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->
    <section id="Perfil-1" class="perfil">
        <div class="container">
            <!--about-->
            <div class="row mb-2 d-flex align-items-center">
                <div class="col-md-5">
                    <div class="img-cv">
                        <img class="juampasdev" src="<?php echo get_template_directory_uri(); ?>/assets/img/coder-jp.svg" class="img-fluid mx-auto" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="txt-cv">
                        <div class="top">
                            <h3>Soy Juampa Desarrollador Front End</h3>
                        </div>
                        <div class="cuerpo">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas sed tempus urna et pharetra pharetra massa. Etiam sit amet nisl purus. Fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                        <div class="bottom">
                            <ul class="nav align-items-center justify-content-end">
                                <li class="nav-item">
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Skills y carousel-->
            <div class="row justify-content-center">
                <!--Skills-->
                <?php if( have_rows('carousel_frontend') ): ?>
                <div class="skills col-12 col-md-6">
                    <div class="titulo-skill">
                        <h2>Skills</h2>
                    </div>
                    <?php while( have_rows('lista_de_habilidades') ): the_row(); 
                    $habilidad = get_sub_field('nombre_de_habilidad');
                    $porcentaje = get_sub_field('porcentaje');
                    ?>
                    <div class="habilidad">
                        <div class="habilidad-nombre">
                            <h4><?php echo $habilidad; ?></h4>
                        </div>
                        <div class="habilidad-barra progress">
                            <div class="progress-bar" style="width:<?php echo $porcentaje; ?>%"></div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
                <!--carousel-->
                <?php if( have_rows('carousel_frontend') ): ?>
                    <div class="carousel-dev col-12 col-md-4">
                        <div class="contenedor-carousel-dev">
                            <div class="head-carousel">
                                <div class="dot-1"></div>
                                <div class="dot-2"></div>
                                <div class="dot-3"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <?php while( have_rows('carousel_frontend') ): the_row(); 
                                    $image = get_sub_field('imagen');
                                    $ID = get_sub_field('identificador');
                                ?>
                                <div class="item">
                                    <a  type="button" class="sitio d-flex felx-colum align-items-center justify-content-center" data-toggle="modal" data-target="#web<?php echo $ID; ?>" style="display:block; background-image:url('<?php echo $image['url']; ?>');">
                                        <span>Ver Sitio</span>
                                    </a>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <!--owl modal-->
                             <?php while( have_rows('carousel_frontend') ): the_row();
                                $image = get_sub_field('imagen');
                                $ID = get_sub_field('identificador');
                                $nombre = get_sub_field('nombre_sitio');
                                $txt = get_sub_field('descripcion_texto');
                                $link = get_sub_field('link_');
                             ?>
                                <div class="modal fade" id="web<?php echo $ID; ?>" tabindex="-1" role="dialog" aria-labelledby="web<?php echo $ID; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="titulo"><?php echo $nombre; ?></h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="imagen col-12 col-md-8">
                                                    <div class="img-sitio" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                                                </div>
                                                <div class="data col-12 col-md-4">
                                                    <h3 class="titulo"><?php echo $nombre; ?></h3>
                                                    <p><?php echo $txt; ?></p>
                                                    <a href="<?php echo $link; ?>" class="btn site-btn">Ver Más</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="Perfil-2" class="perfil">
        <div class="container">
            <div class="row mb-2 d-flex align-items-center">
                <div class="col-md-5">
                    <div class="img-cv">
                        <img class="juampasdev" src="<?php echo get_template_directory_uri(); ?>/assets/img/draw-jp.svg" class="img-fluid mx-auto" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="txt-cv">
                        <div class="top">
                            <h3>Soy Juampa Desarrollador Front End</h3>
                        </div>
                        <div class="cuerpo">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas sed tempus urna et pharetra pharetra massa. Etiam sit amet nisl purus. Fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                        <div class="bottom">
                            <ul class="nav align-items-center justify-content-end">
                                <li class="nav-item">
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#">
                                            <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                 <div class="Redes col-12 col-md-6"></div>
                <?php if( have_rows('carousel_libros') ): ?>
                    <div class="carousel-dev col-12 col-md-4">
                        <div class="contenedor-carousel-dev">
                            
                            <div class="owl-carousel owl-theme">
                                <?php while( have_rows('carousel_libros') ): the_row(); 
                                    $image = get_sub_field('imagen');
                                    $ID = get_sub_field('identificador');
                                ?>
                                <div class="item">
                                    <a  type="button" class="sitio d-flex felx-colum align-items-center justify-content-center" data-toggle="modal" data-target="#libro<?php echo $ID; ?>" style="display:block; background-image:url('<?php echo $image['url']; ?>');">
                                        <span>Ver Libro</span>
                                    </a>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <!--owl modal-->
                            <?php while( have_rows('carousel_libros') ): the_row();
                                $image = get_sub_field('imagen');
                                $ID = get_sub_field('identificador');
                                $nombre = get_sub_field('nombre_libro');
                                $txt = get_sub_field('descripcion_texto');
                                $link = get_sub_field('link_');
                            ?>
                                <div class="modal fade" id="libro<?php echo $ID; ?>" tabindex="-1" role="dialog" aria-labelledby="libro<?php echo $ID; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="titulo"><?php echo $nombre; ?></h3>
                                            
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="imagen col-12 col-md-8">
                                                    <div class="img-sitio" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                                                </div>
                                                <div class="data col-12 col-md-4">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h3 class="titulo"><?php echo $nombre; ?></h3>
                                                    <p><?php echo $txt; ?></p>
                                                    <a href="<?php echo $link; ?>" class="btn site-btn">Ver Más</a>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        </div>

                    </div>
                <?php endif; ?>
            </div>
        </div>
        
    </section>
</main>
<?php get_footer(); ?>