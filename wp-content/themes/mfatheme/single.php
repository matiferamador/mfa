<?php
get_header(); 
?>
<main class="contenedor info-page">

<?php 
while (have_posts()): the_post();
    $author_id = get_the_author_meta('ID'); // Obtén el ID del autor
    $author_first_name = get_the_author_meta('first_name', $author_id); // Obtén el nombre del autor
    $author_last_name = get_the_author_meta('last_name', $author_id); // Obtén el apellido del autor
?>
    <h2><?php the_title(); ?></h2> 
    <p><?php echo 'Autor: ' . $author_first_name . ' ' . $author_last_name; ?></p>
    <?php the_post_thumbnail('large');
    the_content();
endwhile;
?> 
</main>

