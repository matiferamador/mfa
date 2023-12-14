<?php 
get_header() 
?>
<main class="contenedor info-page">
            <?php 
            while (have_posts()): the_post();
                the_content();
            endwhile;
            ?>
            <?php mostrar_proyectos() ?>
</main>
