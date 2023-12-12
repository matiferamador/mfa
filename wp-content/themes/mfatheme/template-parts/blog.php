<li>
    <div class="listado-flex">
        <div class="listado-flex-info">
            <p> <?php the_field('fecha_post'); ?></p>
            <a href="<?php the_permalink();?>">  <h4>  
                    <?php
                    the_title();
                    ?>
                </h4>  
            </a> 
        </div>
        <div class="listado-flex-img">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( ['class' => 'imagen-blog', 'alt' => 'Imagen de blog']); ?>
        
        </a>

        </div>   
    </div>
</li>

