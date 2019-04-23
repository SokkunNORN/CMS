
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?>>

    <div class="container">
        <div class="menu">
            <?php 
                $args = array(
                    register_nav_menu('theme_location', 'primary')
                );
                wp_nav_menu($args);
            ?>
        </div>
        <?php if(have_posts()):
            while(have_posts()): the_post()?>     

                <table>
                    <tr>
                        <th style="width:30%; border: dashed 3px #ffd35e; background: #fdf5e1;">
                            <h2><?php the_title(); ?></h2>
                        </th>
                        <td style="border: dashed 3px #2ecc71; background: #d7fee8; padding: 5px;">
                            <?php the_content(); ?>
                        </td>
                    </tr>
                </table>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>

    <div class="footer">
        <p>
            <?php 
                $args = array (
                    register_nav_menu('theme_location', 'footer')
                );
                wp_nav_menu($args);
            ?>
        </p>
<p class="copyright" style="text-align: center;">
            <?php
                bloginfo('name');
            ?> - &copy <?php echo date('Y'); ?>
        </p>
    </div>

</body>
</html>






