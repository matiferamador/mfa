<?php
get_header();
?>

<main class="contenedor info-page">

    <?php
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/pagina');
    }
    ?>

</main>

<?php
get_footer();
?>
