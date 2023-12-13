<?php
get_header();
?>
<main class="contenedor">
    <section class="info-page">
    <h3>Matias Amador</h3>
    <p>Escribo código y comunico sobre ello.</p>
    </section>
    <section class="info-page"> 
        <div class="grid-info-perfil">
            <div>  
                <img src=" <?php echo get_template_directory_uri(); ?>/img/perfil.jpg" alt="logotipo">
            </div>
            <div class="grid-info-perfil-icons">
                    <a href="https://github.com/matiferamador">
                        <img src=" <?php echo get_template_directory_uri(); ?>/img/github.svg" alt="logotipo">
                        <p>GitHub</p>
                    </a>
                    <a href="https://www.instagram.com/matiferamador/">
                        <img src=" <?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="logotipo">
                        <p>Instagram</p>
                    </a>
            </div>
        </div>     
    </section>
    <section class="info-page">
    <?php 
            while (have_posts()): the_post();
                the_content();
            endwhile;
            ?>
    </section>
</main>
<section class="info-page contenedor">
    <h4>Ultimos posts</h4>
    <li>
    <div class="listado-flex">
        <div class="listado-flex-info">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );
            $blog = new WP_Query($args);
                    while($blog->have_posts()) {
                        $blog -> the_post();
                        get_template_part('template-parts/blog');
                    }
                    wp_reset_postdata();
                    ?>
        </div>   
    </div>
</li>
    <div class="contenedor-boton">

        <img src=" <?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="flecha blog">
        
        <a href="<?php echo esc_url( get_permalink(get_page_by_title('Blog'))) ?>" class="boton boton-primario ">Ver todas las novedades</a>
    </div>
</section>