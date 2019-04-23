
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <div class="container-fluid mt-4">
    <header class="site-header">
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

      <?php if(is_page()) : ?>
        <h5><?php bloginfo('description'); ?> - <?php the_title(); ?></h5>
      <?php endif;?>

      <nav class="site-nav">
        <?php $args = array('theme_location'=>'primary')?>
        <?php wp_nav_menu($args);?>
      </nav>
      
    </header>
  </div>

<?php if(is_page('gallery')) : ?>
      <h3>Thank for visit!</h3>
<?php endif; ?>   

