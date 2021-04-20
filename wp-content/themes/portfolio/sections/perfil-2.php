<section id="Perfil-2" class="perfil">
    <div class="container">
        <div class="row mb-2 d-flex align-items-center">
            <div class="col-md-5">
                <div class="img-cv">
                    <?php $imagen_bio2 = get_field( 'imagen-bio2' ); ?>
                    <?php if ( $imagen_bio2 ) : ?>
                        <img  class="juampasdev img-fluid mx-auto" src="<?php echo esc_url( $imagen_bio2['url'] ); ?>" alt="<?php echo esc_attr( $imagen_bio1['alt'] ); ?>" />
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/draw-jp.svg" class="juampasdev img-fluid mx-auto" alt="juampa-Dev">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-7">
                <div class="txt-cv">
                    <div class="top">
                        <?php if ( get_field( 'titulo_bio_2' ) ) : ?>
                            <h3> <?php the_field( 'titulo_bio_2' ); ?></h3>
                        <?php else : ?>
                            <h3>¡También Hago Historietas!</h3>
                        <?php endif; ?>
                    </div>
                    <div class="cuerpo">
                        <?php if ( get_field( 'bio_2' ) ) : ?>
                            <p>
                                <?php the_field( 'bio_2' ); ?>
                            </p>
                        <?php else : ?>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae placeat vel, assumenda illo, consequuntur quo ad provident saepe ipsum cum quod pariatur quasi facere molestias doloremque quae eum sapiente qui.
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
                <div class="Redes col-12 col-md-6 mb-5">

                    <h3> Seguí mi Trabajo en:</h3>
                    <ul class="nav justify-content-center">
                        <?php while( have_rows('lista_de_redes') ): the_row(); 
                        $link = get_sub_field('link_redes');
                        $icon = get_sub_field('icono');
                        ?>
                        <li>
                            <a href="<?php echo $link; ?>" target="blank"><?php echo $icon; ?></a>
                        </li>
                        
                    <?php endwhile; ?>
                        
                    </ul>
                    <h3> Apoya mi trabajo colaborando en:</h3>
                    <ul class="nav  justify-content-center">
                        <?php while( have_rows('redes_suport') ): the_row(); 
                        $link = get_sub_field('link_a_suport');
                        $icon = get_sub_field('icono-suport');
                        ?>
                            <li>
                                <a href="<?php echo $link; ?>" target="blank"><?php echo $icon; ?></a>
                            </li>
                            
                        <?php endwhile; ?>  
                    </ul>
                </div>
            <?php if( have_rows('carousel_libros') ): ?>
                <div class="carousel-dev col-12 col-md-4 mb-5 d-none d-md-block">
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
                                    <!--<div class="modal-header">
                                        <h3 class="titulo"><?php //echo $nombre; ?></h3>
                                        
                                    </div>-->
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
                                                    <a href="<?php echo $link; ?>" target="blank" class="btn site-btn">Ver Más</a>
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