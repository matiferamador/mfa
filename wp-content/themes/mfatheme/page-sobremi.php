<?php
    /*
    * Template Name: Sobre mi
    */
    get_header();
?>
<main class="contenedor">

<section class="info-page">
    <h2>Yo</h2>
    <p>Un poquito sobre mi</p>
</section>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">  
    <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_7229.jpg" alt="salares de salta" />     
        </div>
    <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/yo.jpg" alt="foto de matias" />
            
        </div>  
        <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/img/salares.jpg" alt="salares de salta" />
        </div>
    </div>
    <div class="swiper-pagination"></div>
    
</div>
<section>
<?php 
        get_template_part('template-parts/pagina')
        ?>

</section>


<section> 
    <div class="contacto-grid">
        <div class="contacto-grid-bg">
            <a href="mailto:amadormatias1999@gmail.com">
                <div class="contacto-card">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-code" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#AEF6C7" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M11 19h-6a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v6" />
                        <path d="M3 7l9 6l9 -6" />
                        <path d="M20 21l2 -2l-2 -2" />
                        <path d="M17 17l-2 2l2 2" />
                        </svg>
                    <p>
                        Email
                    </p>

                </div>
            
            </a>
        </div>
        <div class="contacto-grid-bg">
            <a href="https://www.instagram.com/matiferamador/">
                <div class="contacto-card">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#AEF6C7" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M16.5 7.5l0 .01" />
                    </svg>
                    <p>
                        Instagram
                    </p>
                </div>
            </a>
        </div>    
    </div>
</section>


</main>