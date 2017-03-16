<?php get_header(); ?>

<?php get_template_part('navi' , ''); ?>

<div id="body">
  <h3><?php bloginfo('name'); ?></h3>
  <h2 class="seitentitel"><?php the_title(); ?></h2>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div id="meta">
            <p>erstellt am: <?php the_date('d.m.Y'); ?> | von: <?php the_author(); ?>
          </div>
          <div class="entry">
      	    <?php the_content(); ?>
          </div>
  <?php endwhile; ?> <?php endif; ?>
</div><!-- body -->

<?php get_footer(); ?>
