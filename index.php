<?php get_header(); ?>
<br />
<br />
<br />
<br />
<br />
  <?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
    get_template_part( 'content', get_post_format() );

  endwhile; endif;

  ?>

<?php get_footer(); ?>
