<li>
    <div class="listado-flex">
        <div class="listado-flex-info">
            <p> <?php the_field('fecha_post'); ?></p>
            <a href="<?php the_permalink();?>"  class="enlace-img dark:text-blue-500 hover:no-underline"  data-popover-target="popover-image">  <h4>  
                    <?php
                    the_title();
                    ?>
                </h4>
            </a> 
        </div>
        <div class="listado-flex-img">
        <?php the_post_thumbnail( ['class' => 'imagen-blog', 'alt' => 'Imagen de blog']); ?>

        </div>   
    </div>
</li>

