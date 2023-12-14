<?php
function mostrar_proyectos() {
    ?>
    <ul class="listado-proyectos">
        <?php
        $args = array(
            'post_type' => 'proyecto', // Nombre del tipo de entrada personalizado
            'posts_per_page' => -1, // Mostrar todos los proyectos
        );

        $proyectos = new WP_Query($args);

        while ($proyectos->have_posts()) {
            $proyectos->the_post();
            ?>
            <li class="proyectos">
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>

                <div>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <h4><?php the_title(); ?></h4>
                  
                        </a> 
                        <p><?php the_field('fecha_proyecto'); ?></p>

                    </div>
                    <div>
                    <?php
                        $contenido = get_the_content();
                        $contenido_corto = wp_trim_words($contenido, 20); 
                        echo '<p>' . $contenido_corto . '</p>';
                        ?>
                    </div>
                    
                </div>
            </li>
            <?php
        }

        wp_reset_postdata();
        ?>
    </ul>
    <?php
}
?>

