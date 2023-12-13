<?php
function proyectos_mfa() {
    $args = array(
        'post_type'      => 'proyecto', // Nombre del tipo de entrada personalizado
        'posts_per_page' => -1,         // Mostrar todos los proyectos, puedes ajustar según sea necesario
    );

    $proyectos = new WP_Query($args);

        while ($proyectos->have_posts()) : $proyectos->the_post();
    ?>
            <a href="<?php the_permalink(); ?>">
                <h4><?php the_title(); ?></h4>
                <div class="contenido-proyecto">
                    <?php the_content(); ?>
                </div>
            </a>
    <?php
        endwhile;
        wp_reset_postdata(); // Restablece los datos del post

}
