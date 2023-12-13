<?php 
            while (have_posts()): the_post();
                the_content();
                the_post_thumbnail();
            endwhile;
            ?>