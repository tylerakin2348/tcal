<div class="page">
  <div class="container__inner">
    <?php if (! "The Church at Louisville" ) { ?>
    <h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p> <?php } ?>

     <?php the_content(); ?>
     <a href="#" style="top:0";><img class="arrow_to-top" src="<?php bloginfo('template_directory');?>/assets/img/arrow.svg" alt=""></a>
  </div>
</div><!-- /.blog-post -->
