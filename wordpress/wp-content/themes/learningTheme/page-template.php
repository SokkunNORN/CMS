
<?php
    /**
     * Template Name: Custom page template
     */

    get_header();
    ?>
        <div class="container">
            <?php
            if(have_posts()):
                
                while(have_posts()): the_post(); ?>
    
                    <article class="post page">
                        <table border="0" class="mt-4" width="100%">
                            <tr>
                                <td class="tdtitle" width="30%">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </td>
                                <td class="tdcontent">
                                    <?php the_content(); ?>
                                </td>
                            </tr>
                        </table>
                    </article>
    
                <?php endwhile;
            
            else:
                echo '<p class="text-center">No Post found</p>';
            endif;?>
        </div>
    <?php
    get_footer();
    
    ?>