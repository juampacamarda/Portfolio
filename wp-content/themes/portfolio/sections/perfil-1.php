<section id="Perfil-1" class="perfil d-none">
    <div class="container">
        <!--about-->
        <div class="row mb-2 d-flex align-items-center">
            <div class="col-md-5">
                <div class="img-cv">
                    <?php $imagen_bio1 = get_field( 'imagen-bio1' ); ?>
                    <?php if ( $imagen_bio1 ) : ?>
                        <img  class="juampasdev img-fluid mx-auto" src="<?php echo esc_url( $imagen_bio1['url'] ); ?>" alt="<?php echo esc_attr( $imagen_bio1['alt'] ); ?>" />
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coder-jp.svg" class="juampasdev img-fluid mx-auto" alt="juampa-Dev">

                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-7">
                <div class="txt-cv">
                    <div class="top">
                        <?php if ( get_field( 'titulo_bio_01' ) ) : ?>
                            <h3> <?php the_field( 'titulo_bio_01' ); ?></h3>
                        <?php else : ?>
                            <h3>Soy Juampa Desarrollador Front End</h3>
                        <?php endif; ?>
                    </div>
                    <div class="cuerpo">
                        <?php if ( get_field( 'bio_1' ) ) : ?>
                            <p>
                                <?php the_field( 'bio_1' ); ?>
                            </p>
                        <?php else : ?>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae placeat vel, assumenda illo, consequuntur quo ad provident saepe ipsum cum quod pariatur quasi facere molestias doloremque quae eum sapiente qui.
                            </p>
                        <?php endif; ?>
                        
                    </div>
                    <div class="bottom">
                        <ul class="nav align-items-center justify-content-end">
                            <li class="nav-item">
                                <a href="https://behance.net/juampacamarda"><i class="fab fa-behance"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="http://linkedin.com/in/juampa-camarda-09b71030">
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
            <div class="skills mb-5 col-12 col-md-6">
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
                <div class="carousel-dev mb-5 d-none d-md-block col-12 col-md-4">
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
                                    
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="imagen col-12 col-md-8">
                                                <div class="img-sitio" style="background-image:url('<?php echo $image['url']; ?>');"></div>
                                            </div>
                                            <div class=" col-12 col-md-4">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="data">
                                                    <h3 class="titulo"><?php echo $nombre; ?></h3>
                                                    <p><?php echo $txt; ?></p>
                                                    <a href="<?php echo $link; ?>"  target="blank" class="btn site-btn">Ver Más</a>
                                                </div>
                                                
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