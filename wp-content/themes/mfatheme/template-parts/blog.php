
<li>
    <div class="listado-flex">
        <div class="listado-flex-info">
            <p><?php the_field('fecha_post'); ?></p>
            <a href="<?php the_permalink(); ?>" class="hover:no-underline" data-popover-target="popover-image-<?php the_ID(); ?>">
                <h4><?php the_title(); ?></h4>
            </a>
            <div data-popover id="popover-image-<?php the_ID(); ?>" role="tooltip" class="absolute z-10 invisible transition-opacity duration-300 rounded-lg shadow-sm opacity-0 imagen-blog-desktop">
                <?php the_post_thumbnail('medium'); ?>
            </div>
            <div data-popper-arrow></div>
        </div>
        <div class="listado-flex-img">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(['class' => 'imagen-blog', 'alt' => 'Imagen de blog']); ?>
            </a>
        </div>
    </div>
</li>

