<?php get_header() ?>
<body>
<main class="contenedor info-page">
            <?php 
            while (have_posts()): the_post();
                the_content();
            endwhile;
            ?>
</main>
