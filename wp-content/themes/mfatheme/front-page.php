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