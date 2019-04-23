

<?php

    get_header();
    ?>
    <div class="container">
        <?php
        if(have_posts()):
        
            while(have_posts()): the_post(); ?>
        
                <article class="post page">
                    <?php 
                        $args = [
                            'child_of'=>get_top_ancestor_id(),
                            'title_li'=>''
                        ];
                        wp_list_pages($args); 
                    ?>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                </article>
        
            <?php endwhile;
        
        else:
            echo "<p>No Post found</p>";
        endif;?>
    </div>
    <?php
    get_footer();







