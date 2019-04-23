
<?php

get_header();
?>
	<div class="container">
        <?php
        if(have_posts()):
            
            while(have_posts()): the_post(); ?>

                <article class="post page">
                    <table border="0" width="100%">
                        <tr>
                            <td width="30%"><h3><?php the_title();?></h3></td>
                            <td><?php the_content();?></td>
                        </tr>
                    </table>
                </article>

            <?php endwhile;
        
        else:
            echo "<p>No Post found</p>";
        endif;?>
    </div>
<?php
get_footer();

?>