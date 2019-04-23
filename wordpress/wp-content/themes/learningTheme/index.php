
<?php

get_header();

?>
	<div class="container">
<?php
if(have_posts()):
    
	while(have_posts()): the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content(); ?></p>

	<?php endwhile;
 
else:
	echo "<p>No Post found</p>";
endif;?>
</div>
<?php

get_footer();

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




