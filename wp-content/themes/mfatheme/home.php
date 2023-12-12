<?php
get_header();
?>
<main class="contenedor">
    <section class="info-page">
    <h2>Blog</h2>
    <p>Mi dia a dia, codigo, diseño y mas...</p>
    </section>
    <section class="info-page">       
        <?php 
        while (have_posts()) {
            the_post();
        get_template_part('template-parts/blog');
        } 
        ?>

    </section>
    <div class="pagination-container">
        <?php the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
        )); ?>
    </div>

</main>
    

